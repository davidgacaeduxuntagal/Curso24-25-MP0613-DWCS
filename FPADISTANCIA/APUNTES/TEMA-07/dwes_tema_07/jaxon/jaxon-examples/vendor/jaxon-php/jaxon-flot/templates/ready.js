/*
 * Jaxon Flot plugin
 */
    $("#flot-tooltip").remove();
    $('<div id="flot-tooltip"></div>').css({
        position: "absolute",
        display: "none",
        border: "1px solid #fdd",
        padding: "2px",
        "background-color": "#fee",
        opacity: 0.80
    }).appendTo("body");

    jaxon.command.handler.register("flot.plot", function(args) {
        const options = args.data.options || {};
        const graphs = [];
        let showLabels = false;
        args.data.labels = {};
        // Set container size
        if(args.data.size.width !== "")
        {
            $(args.data.selector).css({width: args.data.size.width});
        }
        if(args.data.size.height !== "")
        {
            $(args.data.selector).css({height: args.data.size.height});
        }
        for(let i = 0, ilen = args.data.graphs.length; i < ilen; i++)
        {
            const g = args.data.graphs[i];
            const graph = g.options || {};
            graph.data = [];
            if(g.values.data != null)
            {
                for(let j = 0, jlen = g.points.length; j < jlen; j++)
                {
                    const x = g.points[j];
                    graph.data.push([x, g.values.data[x]]);
                }
            }
            else if(g.values.func != null)
            {
                g.values.func = new Function("x", g.values.func);
                for(let j = 0, jlen = g.points.length; j < jlen; j++)
                {
                    const x = g.points[j];
                    graph.data.push([x, g.values.func(x)]);
                }
            }
            if(g.labels.func !== null)
            {
                g.labels.func = new Function("series,x,y", g.labels.func);
            }
            if(typeof g.options.label !== "undefined" && (g.labels.data != null || g.labels.func != null))
            {
                showLabels = true;
                args.data.labels[g.options.label] = g.labels;
            }
            graphs.push(graph);
        }
        // Setting ticks
        if(args.data.xaxis.points.length > 0)
        {
            const ticks = [];
            if(args.data.xaxis.labels.data != null)
            {
                for(let i = 0; i < args.data.xaxis.points.length; i++)
                {
                    const point = args.data.xaxis.points[i];
                    ticks.push([point, args.data.xaxis.labels.data[point]]);
                }
            }
            else if(args.data.xaxis.labels.func != null)
            {
                args.data.xaxis.labels.func = new Function("x", args.data.xaxis.labels.func);
                for(let i = 0; i < args.data.xaxis.points.length; i++)
                {
                    const point = args.data.xaxis.points[i];
                    ticks.push([point, args.data.xaxis.labels.func(point)]);
                }
            }
            if(ticks.length > 0)
            {
                options.xaxis = {ticks: ticks};
            }
        }
        /*if(args.data.yaxis.points.length > 0)
        {
        }*/
        if(showLabels)
        {
            options.grid = {hoverable: true};
        }
        $.plot(args.data.selector, graphs, options);
        // Labels
        if(showLabels)
        {
            $(args.data.selector).bind("plothover", function (event, pos, item) {
                if(!item)
                {
                    $("#flot-tooltip").hide();
                    return;
                }
                const series = item.series.label;
                const x = item.datapoint[0]; // item.datapoint[0].toFixed(2);
                const y = item.datapoint[1]; // item.datapoint[1].toFixed(2);
                let tooltip = "";
                if(typeof args.data.labels[series] !== "undefined")
                {
                    const labels = args.data.labels[series];
                    if(labels.data != null && typeof labels.data[x] !== "undefined")
                    {
                        tooltip = labels.data[x];
                    }
                    else if(labels.func != null)
                    {
                        tooltip = labels.func(series, x, y);
                    }
                }
                if((tooltip))
                {
                    $("#flot-tooltip").html(tooltip).css({top: item.pageY+5, left: item.pageX+5}).fadeIn(200);
                }
            });
        }
    });
