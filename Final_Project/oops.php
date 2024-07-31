<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/test.css">
    <title>Quiz</title>
</head>

<body>
    <div class="container" id="container1">
        <h1>Quiz</h1>
        <hr>

        <form id="quizForm">
            <!-- Question 1 -->
            <div id="question1">
                <h2>Question 1:</h2>
                <p>Which among the following feature is not in the general definition of OOPS?</p>
                <label><input type="radio" name="q1" value="Modularity">Modularity</label>
                <label><input type="radio" name="q1" value="Efficient Code">Efficient Code</label>
                <label><input type="radio" name="q1" value="Code reusability">Code reusability</label>
                <label><input type="radio" name="q1" value="Duplicate or Redundant Data">Duplicate or Redundant Data</label>
                <button class="prev-btn" type="button" onclick="showPrevQuestion('question2')">Previous</button>
                <button class="next-btn" type="button" onclick="showNextQuestion('question1')">Next</button>
                <button class="clear-btn" type="button" onclick="clearChoice('q1')">Clear My Choice</button>
            </div>


            <!-- Question 2 -->
            <div id="question2" style="display: none;">
                <h2>Question 2:</h2>
                <p>Which feature of OOPS derives the class from another class?</p>
                <label><input type="radio" name="q2" value="Inheritance ">Inheritance </label>
                <label><input type="radio" name="q2" value="Data hiding">Data hiding</label>
                <label><input type="radio" name="q2" value="Encapsulation">Encapsulation</label>
                <label><input type="radio" name="q2" value="Polymorphism">Polymorphism</label>
                <button class="prev-btn" type="button" onclick="showPrevQuestion('question2')">Previous</button>
                <button class="next-btn" type="button" onclick="showNextQuestion('question2')">Next</button>
                <button class="clear-btn" type="button" onclick="clearChoice('q2')">Clear My Choice</button>
            </div>

            <!-- Question 3 -->
            <div id="question3" style="display: none;">
                <h2>Question 3:</h2>
                <p>Define the programming language, which does not support all four types of inheritance?</p>
                <label><input type="radio" name="q3" value="Smalltalk">Smalltalk</label>
                <label><input type="radio" name="q3" value="Kotlin">Kotlin</label>
                <label><input type="radio" name="q3" value="Java">Java</label>
                <label><input type="radio" name="q3" value="C++">C++</label>
                <button class="prev-btn" type="button" onclick="showPrevQuestion('question3')">Previous</button>
                <button class="next-btn" type="button" onclick="showNextQuestion('question3')">Next</button>
                <button class="clear-btn" type="button" onclick="clearChoice('q3')">Clear My Choice</button>
            </div>

            <!-- Question 4 -->
            <div id="question4" style="display: none;">
                <h2>Question 4:</h2>
                <p>A single program of OOPS contains _______ classes.</p>
                <label><input type="radio" name="q4" value="Only 1">Only 1</label>
                <label><input type="radio" name="q4" value="Only 999">Only 999</label>
                <label><input type="radio" name="q4" value="Only 100">Only 100</label>
                <label><input type="radio" name="q4" value="Any number">Any number</label>
                <button class="prev-btn" type="button" onclick="showPrevQuestion('question4')">Previous</button>
                <button class="next-btn" type="button" onclick="showNextQuestion('question4')">Next</button>
                <button class="clear-btn" type="button" onclick="clearChoice('q4')">Clear My Choice</button>
            </div>

            <!-- Question 5 -->
            <div id="question5" style="display: none;">
                <h2>Question 5:</h2>
                <p> Which operator from the following can be used to illustrate the feature of polymorphism?</p>
                <label><input type="radio" name="q5" value="Overloading <<">Overloading <<</label>
                        <label><input type="radio" name="q5" value="Overloading &&">Overloading &&</label>
                        <label><input type="radio" name="q5" value="Overloading | |">Overloading | |</label>
                        <label><input type="radio" name="q5" value="Overloading +=">Overloading +=</label>
                        <button class="prev-btn" type="button" onclick="showPrevQuestion('question5')">Previous</button>
                        <button class="next-btn" type="button" onclick="showNextQuestion('question5')">Next</button>
                        <button class="clear-btn" type="button" onclick="clearChoice('q5')">Clear My Choice</button>
            </div>

            <!-- Question 6 -->
            <div id="question6" style="display: none;">
                <h2>Question 6:</h2>
                <p>Which two features of object-oriented programming are the same?</p>
                <label><input type="radio" name="q6" value="Abstraction and Polymorphism features are the same">Abstraction and Polymorphism features are the same</label>
                <label><input type="radio" name="q6" value="Inheritance and Encapsulation features are the same">Inheritance and Encapsulation features are the same</label>
                <label><input type="radio" name="q6" value="Encapsulation and Polymorphism features are the same">Encapsulation and Polymorphism features are the same</label>
                <label><input type="radio" name="q6" value="Encapsulation and Abstraction">Encapsulation and Abstraction</label>
                <button class="prev-btn" type="button" onclick="showPrevQuestion('question6')">Previous</button>
                <button class="next-btn" type="button" onclick="showNextQuestion('question6')">Next</button>
                <button class="clear-btn" type="button" onclick="clearChoice('q6')">Clear My Choice</button>
            </div>

            <!-- Question 7 -->
            <div id="question7" style="display: none;">
                <h2>Question 7:</h2>
                <p>Which function best describe the concept of polymorphism in programming languages?</p>
                <label><input type="radio" name="q7" value="Class member function">Class member function</label>
                <label><input type="radio" name="q7" value="Virtual function">Virtual function</label>
                <label><input type="radio" name="q7" value="Inline function">Inline function</label>
                <label><input type="radio" name="q7" value="Undefined function">Undefined function</label>
                <button class="prev-btn" type="button" onclick="showPrevQuestion('question7')">Previous</button>
                <button class="next-btn" type="button" onclick="showNextQuestion('question7')">Next</button>
                <button class="clear-btn" type="button" onclick="clearChoice('q7')">Clear My Choice</button>
            </div>

            <!-- Question 8 -->
            <div id="question8" style="display: none;">
                <h2>Question 8:</h2>
                <p>Which among the following cannot be used for the concept of polymorphism?</p>
                <label><input type="radio" name="q8" value="Static member function ">Static member function </label>
                <label><input type="radio" name="q8" value="Constructor Overloading">Constructor Overloading</label>
                <label><input type="radio" name="q8" value="Member function overloading">Member function overloading</label>
                <label><input type="radio" name="q8" value="Global member function">Global member function</label>
                <button class="prev-btn" type="button" onclick="showPrevQuestion('question8')">Previous</button>
                <button class="next-btn" type="button" onclick="showNextQuestion('question8')">Next</button>
                <button class="clear-btn" type="button" onclick="clearChoice('q8')">Clear My Choice</button>
            </div>

            <!-- Question 9 -->
            <div id="question9" style="display: none;">
                <h2>Question 9:</h2>
                <p>Which member function is assumed to call first when there is a case of using function overloading or abstract class?</p>
                <label><input type="radio" name="q9" value="Global function">Global function</label>
                <label><input type="radio" name="q9" value="Local function">Local function</label>
                <label><input type="radio" name="q9" value="Function with lowest priority">Function with lowest priority</label>
                <label><input type="radio" name="q9" value="Function with the highest priority">Function with the highest priority</label>
                <button class="prev-btn" type="button" onclick="showPrevQuestion('question9')">Previous</button>
                <button class="next-btn" type="button" onclick="showNextQuestion('question9')">Next</button>
                <button class="clear-btn" type="button" onclick="clearChoice('q9')">Clear My Choice</button>
            </div>

            <!-- Question 10 -->
            <div id="question10" style="display: none;">
                <h2>Question 10:</h2>
                <p>Which feature of OOP indicates code reusability?</p>
                <label><input type="radio" name="q10" value="Abstraction">Abstraction</label>
                <label><input type="radio" name="q10" value="Polymorphism">Polymorphism</label>
                <label><input type="radio" name="q10" value="Encapsulation">Encapsulation</label>
                <label><input type="radio" name="q10" value="Inheritance">Inheritance</label>
                <button class="prev-btn" type="button" onclick="showPrevQuestion('question10')">Previous</button>
                <button class="next-btn" type="button" onclick="showNextQuestion('question10')">Next</button>
                <button class="clear-btn" type="button" onclick="clearChoice('q10')">Clear My Choice</button>
            </div>

            <!-- Add similar sections for remaining questions -->

            <!-- Submit Button -->
            <input type="submit" id="submitBtn" style="display: none;" value="Submit">
        </form>
    </div>

    <div id="result"></div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
        // Function to show the next question
        function showNextQuestion(currentQuestion) {
            var nextQuestionNumber = parseInt(currentQuestion.replace('question', '')) + 1;
            var currentQuestionDiv = document.getElementById(currentQuestion);
            var nextQuestionDiv = document.getElementById('question' + nextQuestionNumber);
            if (nextQuestionDiv) {
                currentQuestionDiv.style.display = 'none';
                nextQuestionDiv.style.display = 'block';
            } else {
                // If there's no next question, show the submit button
                document.getElementById('submitBtn').style.display = 'block';
            }
        }

        // Function to show the previous question
        function showPrevQuestion(currentQuestion) {
            var prevQuestionNumber = parseInt(currentQuestion.replace('question', '')) - 1;
            var currentQuestionDiv = document.getElementById(currentQuestion);
            var prevQuestionDiv = document.getElementById('question' + prevQuestionNumber);
            if (prevQuestionDiv) {
                currentQuestionDiv.style.display = 'none';
                prevQuestionDiv.style.display = 'block';
            }
        }

        // Function to clear selected answer for a question
        function clearChoice(question) {
            var radios = document.getElementsByName(question);
            for (var i = 0; i < radios.length; i++) {
                radios[i].checked = false;
            }
        }

        // Event listener for the form submission
        document.getElementById('quizForm').addEventListener('submit', function (event) {
            event.preventDefault();
            // Calculate score
            var score = 0;
            // Define the correct answers for each question
            var correctAnswers = {
                q1: 'Duplicate or Redundant Data',
                q2: 'Inheritance',
                q3: 'Java',
                q4: 'Any number',
                q5: 'Overloading <<',
                q6: 'Encapsulation and Abstraction',
                q7: 'Virtual function',
                q8: 'Static member function',
                q9: 'Function with the highest priority',
                q10: 'Inheritance'
                // Add correct answers for remaining questions
            };
            // Loop through each question
            for (var i = 1; i <= 10; i++) {
                var selectedAnswer = document.querySelector('input[name="q' + i + '"]:checked');
                // Check if an answer is selected
                if (selectedAnswer) {
                    // Check if the selected answer is correct
                    if (selectedAnswer.value === correctAnswers['q' + i]) {
                        score++;
                    }
                }
            }
            // Display score
            alert(`Your Score is ${score} out of 10`);
            result.innerHTML = score;
        });

        $(document).ready(function () {
            
            var targetNode = document.getElementById('result');

            
            var observer = new MutationObserver(function (mutationsList) {
                
                for (var mutation of mutationsList) {
                    if (mutation.type === 'childList' && targetNode.innerHTML !== '') {

                        var searchValue = targetNode.innerHTML;

                        $.ajax({
                            url: 'includes/testhandler.php',
                            method: 'POST',
                            data: { search: searchValue },
                            success: function (response) {
                                alert("Updated Successfully");
                            },
                            error: function (xhr, status, error) {
                                console.error('Error:', error);
                            }
                        });
                    }
                }
            });

            var config = { attributes: false, childList: true, subtree: false };
            observer.observe(targetNode, config);
        });

    </script>
</body>

</html>