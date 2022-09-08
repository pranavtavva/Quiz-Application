
<script>
const quizData = [
    {
        question: "How do we write comments in HTML?",
        a: "</…….>",
		b: "<!……>",
		c: "</……/>",
		d: "<…….!>",
        correct: "b",
    },
    {
        question: "Which language runs in a web browser?",
        a: "Java",
        b: "C",
        c: "Python",
        d: "JavaScript",
        correct: "d",
    },
    {
        question: "What does CSS stand for?",
        a: "Central Style Sheets",
        b: "Cascading Style Sheets",
        c: "Cascading Simple Sheets",
        d: "Cars SUVs Sailboats",
        correct: "b",
    },
    {
        question: "What does HTML stand for?",
        a: "Hypertext Markup Language",
        b: "Hypertext Markdown Language",
        c: "Hyperloop Machine Language",
        d: "Helicopters Terminals Motorboats Lamborginis",
        correct: "a",
    },
    {
        question: "What year was JavaScript launched?",
        a: "1996",
        b: "1995",
        c: "1994",
        d: "none of the above",
        correct: "b",
    },
];

const quiz = document.getElementById('quiz')
const answerEls = document.querySelectorAll('.answer')
const questionEl = document.getElementById('question')
const a_text = document.getElementById('a_text')
const b_text = document.getElementById('b_text')
const c_text = document.getElementById('c_text')
const d_text = document.getElementById('d_text')
const submitBtn = document.getElementById('submit')
let currentQuiz = 0
let score = 0
let ri=0

loadQuiz()

function loadQuiz() {
    deselectAnswers()

    const currentQuizData = quizData[currentQuiz]

    questionEl.innerText = currentQuizData.question
    a_text.innerText = currentQuizData.a
    b_text.innerText = currentQuizData.b
    c_text.innerText = currentQuizData.c
    d_text.innerText = currentQuizData.d
}

function deselectAnswers() {
    answerEls.forEach(answerEl => answerEl.checked = false)
}

function getSelected() {
    let answer

    answerEls.forEach(answerEl => {
        if(answerEl.checked) {
            answer = answerEl.id
        }
    })

    return answer
}

submitBtn.addEventListener('click', () => {
    const answer = getSelected()
    
    if(answer) {
        if(answer === quizData[currentQuiz].correct) {
            score++
        }

        currentQuiz++

        if(currentQuiz < quizData.length) {
            loadQuiz()
        } 
        else {
            
            document.cookie="total="+score; 
            <?php
            $test = "$_COOKIE[total]";
            $test1= "$_COOKIE[userid1]";
            $conn = new mysqli("localhost","root", "","scores");
            $sql="UPDATE login
            SET score=$test
            WHERE userid= '$test1'";
            $conn->query($sql);
            
        $sql1= "SELECT * FROM login where userid='$test1'";
        $result = $conn->query($sql1);
        if ($result->num_rows > 0) {
             while($row = $result->fetch_assoc()) {
            $r=$row["userid"];
            $e= $row["email"];
            $m= $row["mobile"];
        }
    }
            $conn->close();
            ?>
             var simple = '<?php echo $r; ?>';
            quiz.innerHTML = `
                <h2> ${simple} scored ${score} out of 5</h2>
            `

        }
    }
 
})
</script>

