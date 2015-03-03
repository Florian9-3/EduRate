$(function() {
    Morris.Bar({
        element: 'morris-bar-chart',
        data: [{
            y: '11:30',
            a: 4.5
        }, {
            y: '12:00',
            a: 3.2
        }, {
            y: '12:30',
            a: 1.3
        }, {
            y: '13:00',
            a: 4.2
        }],
        xkey: 'y',
        ykeys: ['a'],
        labels: ['Studenten'],
        hideHover: 'always',
        resize: true,
    });

});
