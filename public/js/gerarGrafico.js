function generateGraph(dadosAlunoJSON) {

    google.charts.load("current", {
        packages: ["corechart"],
    });
    google.charts.setOnLoadCallback(drawChart);

    const aluno = JSON.parse(dadosAlunoJSON);

    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ["Task", "Hours per Day"],
            ["Matematica", 11],
            ["Portugues", 12],
            ["Ingles", 7],
            ["Ciencias", 2],
        ]);

        var options = {
            height: 500,
            is3D: true,
        };

        var chart_div = document.getElementById("chart_div");
        var chart = new google.visualization.PieChart(
            document.getElementById("chart_div")
        );

        google.visualization.events.addListener(chart, "ready", function () {
            chart_div.innerHTML = "" + chart.getImageURI() + "";
        });
        chart.draw(data, options);

        document.getElementById("gerarGrafico").value = chart_div.innerHTML;

        return chart_div.innerHTML;
    }


}
