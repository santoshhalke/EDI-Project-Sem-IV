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
      <h1>Quiz</h1><hr>

        <form id="quizForm">
            <!-- Question 1 -->
            <div id="question1">
                <h2>Question 1:</h2>
                <p>How can we describe an array in the best possible way?</p>
                <label><input type="radio" name="q1" value="The Array shows a hierarchical structure">The Array shows a hierarchical structure.</label>
                <label><input type="radio" name="q1" value="Arrays are immutable">Arrays are immutable.</label>
                <label><input type="radio" name="q1" value="Container that stores the elements of similar types">Container that stores the elements of similar types</label>
                <label><input type="radio" name="q1" value="The Array is not a data structure">The Array is not a data structure</label>
                
                <button class="prev-btn" type="button" onclick="showPrevQuestion('question2')">Previous</button>
                <button class="next-btn" type="button" onclick="showNextQuestion('question1')">Next</button>
                <button class="clear-btn" type="button" onclick="clearChoice('q1')">Clear My Choice</button> <!-- Added clear button -->
            </div>
        

            <!-- Question 2 -->
            <div id="question2" style="display: none;">
                <h2>Question 2:</h2>
                <p>Which one of the following is the size of int arr[9] assuming that int is of 4 bytes?</p>
                <label><input type="radio" name="q2" value="9">9</label>
                <label><input type="radio" name="q2" value="36">36</label>
                <label><input type="radio" name="q2" value="35">35</label>
                <label><input type="radio" name="q2" value="None of the above">None of the above</label>
                <button class="prev-btn" type="button" onclick="showPrevQuestion('question2')">Previous</button>
                <button class="next-btn" type="button" onclick="showNextQuestion('question2')">Next</button>
                <button class="clear-btn" type="button" onclick="clearChoice('q2')">Clear My Choice</button>
            </div>

            <!-- Question 3 -->
            <div id="question3" style="display: none;">
                <h2>Question 3:</h2>
                <p>Which one of the following is the process of inserting an element in the stack?</p>
                <label><input type="radio" name="q3" value="Insert">Insert</label>
                <label><input type="radio" name="q3" value="Add">Add</label>
                <label><input type="radio" name="q3" value="Push">Push</label>
                <label><input type="radio" name="q3" value="None of the above">None of the above</label>
                <button class="prev-btn" type="button" onclick="showPrevQuestion('question3')">Previous</button>
                <button class="next-btn" type="button" onclick="showNextQuestion('question3')">Next</button>
                <button class="clear-btn" type="button" onclick="clearChoice('q3')">Clear My Choice</button>
            </div>

                        <!-- Question 4 -->
                        <div id="question4" style="display: none;">
                            <h2>Question 4:</h2>
                            <p>When the user tries to delete the element from the empty stack then the condition is said to be a ____</p>
                            <label><input type="radio" name="q4" value="Underflow">Underflow</label>
                            <label><input type="radio" name="q4" value="arbage collection">Garbage collection</label>
                            <label><input type="radio" name="q4" value="Overflow">Overflow </label>
                            <label><input type="radio" name="q4" value="None of the above">None of the above</label>
                            <button class="prev-btn" type="button" onclick="showPrevQuestion('question4')">Previous</button>
                            <button class="next-btn" type="button" onclick="showNextQuestion('question4')">Next</button>
                            <button class="clear-btn" type="button" onclick="clearChoice('q4')">Clear My Choice</button>
                        </div>
            
                        <!-- Question 5 -->
                        <div id="question5" style="display: none;">
                            <h2>Question 5:</h2>
                            <p>Which one of the following is not the application of the stack data structure</p>
                            <label><input type="radio" name="q5" value="String reversal">String reversal</label>
                            <label><input type="radio" name="q5" value="Recursion">Recursion</label>
                            <label><input type="radio" name="q5" value="Backtracking">Backtracking</label>
                            <label><input type="radio" name="q5" value="Asynchronous data transfer">Asynchronous data transfer</label>
                            <button class="prev-btn" type="button" onclick="showPrevQuestion('question5')">Previous</button>
                            <button class="next-btn" type="button" onclick="showNextQuestion('question5')">Next</button>
                            <button class="clear-btn" type="button" onclick="clearChoice('q5')">Clear My Choice</button>
                        </div>
            
                        <!-- Question 6 -->
                        <div id="question6" style="display: none;">
                            <h2>Question 6:</h2>
                            <p> Which data structure is mainly used for implementing the recursive algorithm?</p>
                            <label><input type="radio" name="q6" value="Queue">Queue</label>
                            <label><input type="radio" name="q6" value="Stack">Stack</label>
                            <label><input type="radio" name="q6" value="Binary tree">Binary tree</label>
                            <label><input type="radio" name="q6" value="Linked list">Linked list</label>
                            <button class="prev-btn" type="button" onclick="showPrevQuestion('question6')">Previous</button>
                            <button class="next-btn" type="button" onclick="showNextQuestion('question6')">Next</button>
                            <button class="clear-btn" type="button" onclick="clearChoice('q6')">Clear My Choice</button>
                        </div>
            
                        <!-- Question 7 -->
                        <div id="question7" style="display: none;">
                            <h2>Question 7:</h2>
                            <p>Which data structure is required to convert the infix to prefix notation?</p>
                            <label><input type="radio" name="q7" value="Stack">Stack</label>
                            <label><input type="radio" name="q7" value="Linked list">Linked list</label>
                            <label><input type="radio" name="q7" value="Binary tree">Binary tree</label>
                            <label><input type="radio" name="q7" value="Queue">Queue</label>
                            <button class="prev-btn" type="button" onclick="showPrevQuestion('question7')">Previous</button>
                            <button class="next-btn" type="button" onclick="showNextQuestion('question7')">Next</button>
                            <button class="clear-btn" type="button" onclick="clearChoice('q7')">Clear My Choice</button>
                        </div>
            
                        <!-- Question 8 -->
                        <div id="question8" style="display: none;">
                            <h2>Question 8:</h2>
                            <p>A list of elements in which enqueue operation takes place from one end, and dequeue operation takes place from one end is__</p>
                            <label><input type="radio" name="q8" value="Binary tree">Binary tree</label>
                            <label><input type="radio" name="q8" value="Stack">Stack</label>
                            <label><input type="radio" name="q8" value="Queue">Queue</label>
                            <label><input type="radio" name="q8" value="Linked list">Linked list</label>
                            <button class="prev-btn" type="button" onclick="showPrevQuestion('question8')">Previous</button>
                            <button class="next-btn" type="button" onclick="showNextQuestion('question8')">Next</button>
                            <button class="clear-btn" type="button" onclick="clearChoice('q8')">Clear My Choice</button>
                        </div>
            
                        <!-- Question 9 -->
                        <div id="question9" style="display: none;">
                            <h2>Question 9:</h2>
                            <p>Which of the following principle does Queue use?</p>
                            <label><input type="radio" name="q9" value="LIFO principle">LIFO principle</label>
                            <label><input type="radio" name="q9" value="FIFO principle">FIFO principle</label>
                            <label><input type="radio" name="q9" value="Linear tree">Linear tree</label>
                            <label><input type="radio" name="q9" value="Ordered array">Ordered array</label>
                            <button class="prev-btn" type="button" onclick="showPrevQuestion('question9')">Previous</button>
                            <button class="next-btn" type="button" onclick="showNextQuestion('question9')">Next</button>
                            <button class="clear-btn" type="button" onclick="clearChoice('q9')">Clear My Choice</button>
                        </div>
            
                        <!-- Question 10 -->
                        <div id="question10" style="display: none;">
                            <h2>Question 10:</h2>
                            <p>Which one of the following is not the type of the Queue?</p>
                            <label><input type="radio" name="q10" value="Linear Queue">Linear Queue</label>
                            <label><input type="radio" name="q10" value="Circular Queue">Circular Queue</label>
                            <label><input type="radio" name="q10" value="Double ended Queue">Double ended Queue</label>
                            <label><input type="radio" name="q10" value="Single ended Queue">Single ended Queue</label>
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
        document.getElementById('quizForm').addEventListener('submit', function(event) {
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
