var subjectObject = {
    Q1: {
        'Software Fundmental': [
            'C',
            'OOP C++',
            'Network',
            'Operating Systems ',
            'Cloud Computing ',
            'Computer Networks ',
            'Win & Linux',
        ],

        php: [
            'PHP',
            'Nodejs',
            'HTML5',
            'CSS3',
            'Bootstrap',
            'UXUI design basics',
            'MYSQL Database',
        ],

        '.NET': [
            'C#',
            'ASP.Net',
            'Angular Fundamentals',
            'Java Script',
            'HTML5.0',
            'Responsive Web Design',
            'Conditions',
        ],
    },

    Q2: {
        '.NET': [
            'C#',
            'ASP.Net',
            'Angular Fundamentals',
            'Java Script',
            'HTML5.0',
            'Responsive Web Design',
        ],
    },

    Q3: {
        '.NET': [
            'C#',
            'ASP.Net',
            'Angular Fundamentals',
            'Java Script',
            'HTML5.0',
            'Responsive Web Design',
        ],

        Mearn: [
            'Mongo',
            'HTML5.0',
            'Angular Fundamentals',
            'Java Script',
            'css3',
            'Responsive Web Design',
        ],
    },
    Q4: {
        'Software Fundmental': [
            'C',
            'OOP C++',
            'Network',
            'Operating Systems ',
            'Cloud Computing ',
            'Computer Networks ',
            'Win & Linux',
        ],

        '.NET': [
            'C#',
            'ASP.Net',
            'Angular Fundamentals',
            'Java Script',
            'HTML5.0',
            'Responsive Web Design',
        ],

        Mearn: [
            'Mongo',
            'HTML5.0',
            'Angular Fundamentals',
            'Java Script',
            'css3',
            'Responsive Web Design',
        ],
    },
}

window.onload = function () {
    var subjectSel = document.getElementById('Branch')
    var topicSel = document.getElementById('Track')
    var chapterSel = document.getElementById('Track Courses')
    for (var x in subjectObject) {
        subjectSel.options[subjectSel.options.length] = new Option(x, x)
    }
    subjectSel.onchange = function () {
        chapterSel.length = 1
        topicSel.length = 1

        for (var y in subjectObject[this.value]) {
            topicSel.options[topicSel.options.length] = new Option(y, y)
        }
    }
    topicSel.onchange = function () {
        chapterSel.length = 1

        var z = subjectObject[subjectSel.value][this.value]
        for (var i = 0; i < z.length; i++) {
            chapterSel.options[chapterSel.options.length] = new Option(z[i], z[i])
        }
    }
}
