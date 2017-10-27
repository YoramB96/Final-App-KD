<html>
  <head>
    <title>stardog-</title>
    <script type="text/javascript" src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript" src="sgvizler.js"></script>
    <script>
         sgvizler
             .prefix("doc", "http://www.semanticweb.org/chicago/")
             .prefix("dbr", "http://dbpedia.org/resource/")
             .prefix("dbo", "http://dbpedia.org/ontology/")
             .prefix("owl", "http://www.w3.org/2002/07/owl#")
             .defaultEndpointURL("https://dbpedia.org/sparql")
             .defaultQuery("SELECT * { ?a ?b ?c, ?d, ?e }")
             .defaultChartFunction("sgvizler.visualization.Table")
             .defaultChartWidth(1050)
             .defaultChartHeight(200);
    </script>
    <script>

/*
var url = "http://localhost:5820/hallo/query?reasoning=true"; 
    var query = "select * where {?sub ?pred ?obj}";
    
    $.ajax({
        headers : {
            Accept: 'application/sparql-results+json'
        }, 
        url: url,
        data: {
            query: query
        },
        success: function(data) {
            var results = data.results.bindings;
            console.log(results);
        }
    });
    */

</script>
  </head>
  <body>
    <div class="letterkopjes">
    <img class="imgkopje" src="plaatjes/kopjelocatie.png"> 
    <span>CHOOSE YOUR NEIGHBOURHOOD</span>
    </div>
      
    <div class="lettertekst">
    <div class="vaklocaties" onclick="myFunction()">Central Chicago</div>
    <script>
    function myFunction() {
        var Q = new sgvizler.Query();                           // Create a Query instance.
        var arr = "doc:Central_Chicago";
        // Values may also be set in the sgvizler object---but will be
        // overwritten here.
        Q.query("SELECT ?Datum ?Movie ?Park ?Price ?Rating ?Director ?StarActor WHERE {?Park2 ?pred "+arr+" . ?Movie2 doc:plays_at ?Park2 . ?Movie2 doc:plays_on ?Datum2 . ?Movie2 doc:costs ?Price2 . ?Movie2 doc:has_rating ?Rating2 . ?Movie2 rdfs:label ?Movie . ?Park2 rdfs:label ?Park . ?Datum2 rdfs:label ?Datum . ?Price2 rdfs:label ?Price . ?Rating2 rdfs:label ?Rating . ?y owl:sameAs ?Movie2 . ?y cob:directed_by ?Director2 . ?Director2 rdfs:label ?Director . ?y cob:starring ?StarActor2 . ?StarActor2 rdfs:label ?StarActor}")
            .endpointURL("http://localhost:5820/hal/query?reasoning=true")
            .endpointOutputFormat("json")                      // Possible values 'xml', 'json', 'jsonp'.
            .chartFunction("google.visualization.Table")       // The name of the function to draw the chart.
            .draw("myElementID");   
    }
    </script>
    
    <div class="vaklocaties" onclick="myFunction2()">West Side</div>
    <script>
    function myFunction2() {
        var Q = new sgvizler.Query();                           // Create a Query instance.
        var arr = "doc:West_Side";
        // Values may also be set in the sgvizler object---but will be
        // overwritten here.
        Q.query("SELECT ?Datum ?Movie ?Park ?Price ?Rating ?Director ?StarActor WHERE {?Park2 ?pred "+arr+" . ?Movie2 doc:plays_at ?Park2 . ?Movie2 doc:plays_on ?Datum2 . ?Movie2 doc:costs ?Price2 . ?Movie2 doc:has_rating ?Rating2 . ?Movie2 rdfs:label ?Movie . ?Park2 rdfs:label ?Park . ?Datum2 rdfs:label ?Datum . ?Price2 rdfs:label ?Price . ?Rating2 rdfs:label ?Rating . ?y owl:sameAs ?Movie2 . ?y cob:directed_by ?Director2 . ?Director2 rdfs:label ?Director . ?y cob:starring ?StarActor2 . ?StarActor2 rdfs:label ?StarActor}")
            .endpointURL("http://localhost:5820/hal/query?reasoning=true")
            .endpointOutputFormat("json")                      // Possible values 'xml', 'json', 'jsonp'.
            .chartFunction("google.visualization.Table")       // The name of the function to draw the chart.
            .draw("myElementID");    
    }
    </script>

    <div class="vaklocaties" onclick="myFunction3()">Far North Side</div>
    <script>
    function myFunction3() {
        var Q = new sgvizler.Query();                           // Create a Query instance.
        var arr = "doc:Far_North_Side";
        // Values may also be set in the sgvizler object---but will be
        // overwritten here.
        Q.query("SELECT ?Datum ?Movie ?Park ?Price ?Rating ?Director ?StarActor WHERE {?Park2 ?pred "+arr+" . ?Movie2 doc:plays_at ?Park2 . ?Movie2 doc:plays_on ?Datum2 . ?Movie2 doc:costs ?Price2 . ?Movie2 doc:has_rating ?Rating2 . ?Movie2 rdfs:label ?Movie . ?Park2 rdfs:label ?Park . ?Datum2 rdfs:label ?Datum . ?Price2 rdfs:label ?Price . ?Rating2 rdfs:label ?Rating . ?y owl:sameAs ?Movie2 . ?y cob:directed_by ?Director2 . ?Director2 rdfs:label ?Director . ?y cob:starring ?StarActor2 . ?StarActor2 rdfs:label ?StarActor}")
            .endpointURL("http://localhost:5820/hal/query?reasoning=true")
            .endpointOutputFormat("json")                      // Possible values 'xml', 'json', 'jsonp'.
            .chartFunction("google.visualization.Table")       // The name of the function to draw the chart.
            .draw("myElementID");    
    }
    </script>

    <div class="vaklocaties" onclick="myFunction4()">Far Southeast Side</div>
    <script>
    function myFunction4() {
        var Q = new sgvizler.Query();                           // Create a Query instance.
        var arr = "doc:Far_Southeast_Side";
        // Values may also be set in the sgvizler object---but will be
        // overwritten here.
        Q.query("SELECT ?Datum ?Movie ?Park ?Price ?Rating ?Director ?StarActor WHERE {?Park2 ?pred "+arr+" . ?Movie2 doc:plays_at ?Park2 . ?Movie2 doc:plays_on ?Datum2 . ?Movie2 doc:costs ?Price2 . ?Movie2 doc:has_rating ?Rating2 . ?Movie2 rdfs:label ?Movie . ?Park2 rdfs:label ?Park . ?Datum2 rdfs:label ?Datum . ?Price2 rdfs:label ?Price . ?Rating2 rdfs:label ?Rating . ?y owl:sameAs ?Movie2 . ?y cob:directed_by ?Director2 . ?Director2 rdfs:label ?Director . ?y cob:starring ?StarActor2 . ?StarActor2 rdfs:label ?StarActor}")
            .endpointURL("http://localhost:5820/hal/query?reasoning=true")
            .endpointOutputFormat("json")                      // Possible values 'xml', 'json', 'jsonp'.
            .chartFunction("google.visualization.Table")       // The name of the function to draw the chart.
            .draw("myElementID");    
    }
    </script>

    <div class="vaklocaties" onclick="myFunction5()">Far Southwest Side</div>
    <script>
    function myFunction5() {
        var Q = new sgvizler.Query();                           // Create a Query instance.
        var arr = "doc:Far_Southwest_Side";
        // Values may also be set in the sgvizler object---but will be
        // overwritten here.
        Q.query("SELECT ?Datum ?Movie ?Park ?Price ?Rating ?Director ?StarActor WHERE {?Park2 ?pred "+arr+" . ?Movie2 doc:plays_at ?Park2 . ?Movie2 doc:plays_on ?Datum2 . ?Movie2 doc:costs ?Price2 . ?Movie2 doc:has_rating ?Rating2 . ?Movie2 rdfs:label ?Movie . ?Park2 rdfs:label ?Park . ?Datum2 rdfs:label ?Datum . ?Price2 rdfs:label ?Price . ?Rating2 rdfs:label ?Rating . ?y owl:sameAs ?Movie2 . ?y cob:directed_by ?Director2 . ?Director2 rdfs:label ?Director . ?y cob:starring ?StarActor2 . ?StarActor2 rdfs:label ?StarActor}")
            .endpointURL("http://localhost:5820/hal/query?reasoning=true")
            .endpointOutputFormat("json")                      // Possible values 'xml', 'json', 'jsonp'.
            .chartFunction("google.visualization.Table")       // The name of the function to draw the chart.
            .draw("myElementID");    
    }
    </script>
   
   
    <div class="vaklocaties" onclick="myFunction6()">North Side</div>
    <script>
    function myFunction6() {
        var Q = new sgvizler.Query();                           // Create a Query instance.
        var arr = "doc:North_Side";
        // Values may also be set in the sgvizler object---but will be
        // overwritten here.
        Q.query("SELECT ?Datum ?Movie ?Park ?Price ?Rating ?Director ?StarActor WHERE {?Park2 ?pred "+arr+" . ?Movie2 doc:plays_at ?Park2 . ?Movie2 doc:plays_on ?Datum2 . ?Movie2 doc:costs ?Price2 . ?Movie2 doc:has_rating ?Rating2 . ?Movie2 rdfs:label ?Movie . ?Park2 rdfs:label ?Park . ?Datum2 rdfs:label ?Datum . ?Price2 rdfs:label ?Price . ?Rating2 rdfs:label ?Rating . ?y owl:sameAs ?Movie2 . ?y cob:directed_by ?Director2 . ?Director2 rdfs:label ?Director . ?y cob:starring ?StarActor2 . ?StarActor2 rdfs:label ?StarActor}")
            .endpointURL("http://localhost:5820/hal/query?reasoning=true")
            .endpointOutputFormat("json")                      // Possible values 'xml', 'json', 'jsonp'.
            .chartFunction("google.visualization.Table")       // The name of the function to draw the chart.
            .draw("myElementID");    
    }
    </script>
    </div>
      
    <div class="lettertekst">
    <div class="vaklocaties" onclick="myFunction7()">Northwest Side</div>
    <script>
    function myFunction7() {
        var Q = new sgvizler.Query();                           // Create a Query instance.
        var arr = "doc:Northwest_Side";
        // Values may also be set in the sgvizler object---but will be
        // overwritten here.
        Q.query("SELECT ?Movie ?Park ?Datum ?Price ?Rating WHERE {?Park2 ?pred "+arr+" . ?Movie2 doc:plays_at ?Park2 . ?Movie2 doc:plays_on ?Datum2 . ?Movie2 doc:costs ?Price2 . ?Movie2 doc:has_rating ?Rating2 . ?Movie2 rdfs:label ?Movie . ?Park2 rdfs:label ?Park . ?Datum2 rdfs:label ?Datum . ?Price2 rdfs:label ?Price . ?Rating2 rdfs:label ?Rating}")
            .endpointURL("http://localhost:5820/hal/query?reasoning=true")
            .endpointOutputFormat("json")                      // Possible values 'xml', 'json', 'jsonp'.
            .chartFunction("google.visualization.Table")       // The name of the function to draw the chart.
            .draw("myElementID");    
    }
    </script>
   
    <div class="vaklocaties" onclick="myFunction8()">South Side</div>
    <script>
    function myFunction8() {
        var Q = new sgvizler.Query();                           // Create a Query instance.
        var arr = "doc:South_Side";
        // Values may also be set in the sgvizler object---but will be
        // overwritten here.
        Q.query("SELECT ?Datum ?Movie ?Park ?Price ?Rating ?Director ?StarActor WHERE {?Park2 ?pred "+arr+" . ?Movie2 doc:plays_at ?Park2 . ?Movie2 doc:plays_on ?Datum2 . ?Movie2 doc:costs ?Price2 . ?Movie2 doc:has_rating ?Rating2 . ?Movie2 rdfs:label ?Movie . ?Park2 rdfs:label ?Park . ?Datum2 rdfs:label ?Datum . ?Price2 rdfs:label ?Price . ?Rating2 rdfs:label ?Rating . ?y owl:sameAs ?Movie2 . ?y cob:directed_by ?Director2 . ?Director2 rdfs:label ?Director . ?y cob:starring ?StarActor2 . ?StarActor2 rdfs:label ?StarActor}")
            .endpointURL("http://localhost:5820/hal/query?reasoning=true")
            .endpointOutputFormat("json")                      // Possible values 'xml', 'json', 'jsonp'.
            .chartFunction("google.visualization.Table")       // The name of the function to draw the chart.
            .draw("myElementID");    
    }
    </script>

    <div class="vaklocaties" onclick="myFunction7()">Southwest Side</div>
    <script>
    function myFunction7() {
        var Q = new sgvizler.Query();                           // Create a Query instance.
        var arr = "doc:Southwest_Side";
        // Values may also be set in the sgvizler object---but will be
        // overwritten here.
        Q.query("SELECT ?Datum ?Movie ?Park ?Price ?Rating ?Director ?StarActor WHERE {?Park2 ?pred "+arr+" . ?Movie2 doc:plays_at ?Park2 . ?Movie2 doc:plays_on ?Datum2 . ?Movie2 doc:costs ?Price2 . ?Movie2 doc:has_rating ?Rating2 . ?Movie2 rdfs:label ?Movie . ?Park2 rdfs:label ?Park . ?Datum2 rdfs:label ?Datum . ?Price2 rdfs:label ?Price . ?Rating2 rdfs:label ?Rating . ?y owl:sameAs ?Movie2 . ?y cob:directed_by ?Director2 . ?Director2 rdfs:label ?Director . ?y cob:starring ?StarActor2 . ?StarActor2 rdfs:label ?StarActor}")
            .endpointURL("http://localhost:5820/hal/query?reasoning=true")
            .endpointOutputFormat("json")                      // Possible values 'xml', 'json', 'jsonp'.
            .chartFunction("google.visualization.Table")       // The name of the function to draw the chart.
            .draw("myElementID");    
    }
    </script>
    </div>
    <div class="tabel" id="myElementID"></div>
      
    <div class="link">
        Don't know what your neighbourhood is? Click <a class="link1" href="http://anglifx202.202.axc.nl/plaatje.php">here</a>.
    </div>
  </body>
</html>