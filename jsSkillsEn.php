$(document).ready(function () {
    var colors = Highcharts.getOptions().colors,
        title,
        categories,
        data;
    
    //http://jsfiddle.net/9wfGs/
    //PROGRAMMING LANGUAGES
    //--------------------------------------------------------------------------
    if($('#skill-programming-languages').length > 0){
        createChart(
            '#skill-programming-languages',
            'column',
            100,
            'Programming Languages',
            [ 'Java(ADF, JSPX, EJB, JPA, Web Logic)',
              'C#',
              'VB.NET',
              'ASPX',
              'ActionScript',
              'C++',
              'HTML, XML, YML, CSS',
              'Javascript, Jquery, Ajax',
              'PHP (Symfony2)'],
            [{ y: 80, color: colors[0] }, 
             { y: 80, color: colors[1] }, 
             { y: 80, color: colors[2] }, 
             { y: 30, color: colors[3] }, 
             { y: 10, color: colors[4] }, 
             { y: 5, color: colors[5] }, 
             { y: 100, color: colors[6] }, 
             { y: 100, color: colors[7] }, 
             { y: 100, color: colors[8] }]
        );
    }
    
    //http://jsfiddle.net/9wfGs/
    //DATA BASE
    //--------------------------------------------------------------------------
    if($('#skill-data-base').length > 0){
        createChart(
            '#skill-data-base',
            'column',
            100,
            'Data Base',
            [ 'SQL Server 2005 y 2008', 
              'Microsoft Access',
              'Oracle 11g',
              'MySQL'],
            [{ y: 100, color: colors[0] }, 
             { y: 80, color: colors[1] }, 
             { y: 60, color: colors[2] }, 
             { y: 90, color: colors[3] }]
        );
    }
    
    //http://jsfiddle.net/9wfGs/
    //VERSION CONTROL SYSTEM
    //--------------------------------------------------------------------------
    if($('#skill-version-control-system').length > 0){
        createChart(
            '#skill-version-control-system',
            'column',
            100,
            'Version Control System',
            [ 'SVN',
              'Git'],
            [{ y: 100, color: colors[0] }, 
             { y: 100, color: colors[1] }]
        );
    }
    
    //http://jsfiddle.net/9wfGs/
    //INTEGRATED DEVELOPMENTE ENVIRONMENT
    //--------------------------------------------------------------------------
    if($('#skill-ide').length > 0){
        createChart(
            '#skill-ide',
            'column',
            100,
            'Integrated Developmente Environmente (IDE)',
            [ 'Eclipse',
              'FlashDevelop',
              'Netbeans',
              'Visual Studio',
              'JDeveloper'],
            [{ y: 90, color: colors[0] }, 
             { y: 60, color: colors[1] }, 
             { y: 100, color: colors[2] }, 
             { y: 95, color: colors[3] }, 
             { y: 90, color: colors[4] }]
        );
    }
    
    //http://jsfiddle.net/9wfGs/
    //TECHNOLOGIES
    //--------------------------------------------------------------------------
    if($('#skill-technologies').length > 0){
        createChart(
            '#skill-technologies',
            'column',
            100,
            'Technologies',
            [ 'FTP, SFTP, SSH',
              'Linux, CentOS, Ubuntu',
              'Active Directory Windows',
              'Web Services (Java, .Net)',
              'Design Patterns',
              'UML'],
            [{ y: 100, color: colors[0] }, 
             { y: 80, color: colors[1] }, 
             { y: 60, color: colors[2] }, 
             { y: 70, color: colors[3] }, 
             { y: 90, color: colors[4] }, 
             { y: 100, color: colors[5] }]
        );
    }
    
    //http://jsfiddle.net/9wfGs/
    //PERSONAL Skills
    //--------------------------------------------------------------------------
    if($('#skill-personal-skills').length > 0){
        createChart(
            '#skill-personal-skills',
            'column',
            500,
            'Personal Skills',
            [ 'Responsible',
              'Creative',
              'Teamwork',
              'Punctual',
              'Speaking English',
              'Organized'],
            [{ y: 100, color: colors[0] }, 
             { y: 500, color: colors[1] }, 
             { y: 95, color: colors[2] }, 
             { y: 95, color: colors[3] }, 
             { y: 90, color: colors[4] }, 
             { y: 100, color: colors[5] }]
        );
    }
    
    function createChart(pid, ptype, pmax, ptitle, pcategories, pdata){
        $(pid).highcharts({
            chart: {
                // line, spline, area, areaspline, column, bar, pie and scatter.
                type: ptype
            },
            title: {
                text: ptitle
            },
            xAxis: {
                categories: pcategories,
                title: {
                    text: null
                }
            },
            yAxis: {
                min: 0,
                max: pmax,
                title: {
                    text: 'Experience',
                    align: 'high'
                },
                labels: {
                    overflow: 'justify'
                }
            },
            tooltip: {
                pointFormat: '<span style="color:{series.color}">{series.name}</span>: <b>{point.y} %</b>'
            },
            plotOptions: {
                bar: {
                    dataLabels: {
                        enabled: true,
                        format: '<span style="color:{series.color}"><b>{point.y} %</b>'
                    }
                },
                column: {
                    dataLabels: {
                        enabled: true,
                        format: '<span style="color:{series.color}"><b>{point.y} %</b>'
                    }
                }
            },
            series: [{
                name : 'Experience',
                showInLegend: false,
                data: pdata
            }]
        });
    }
});