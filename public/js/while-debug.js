# Pattern for setting up a problem
process of visualization
input -> process -> output

read the exercise
what's the real problem?
what's the output that we need to produce?
what's the given input?
what are the other specifications, validation?
take notes of what you want the code to do, where, in what order
read the exercise

figure out your variables
attention to detail, spotting differences
- what stuff changes (what inputs need to be worked on)
- what stuff gets repeated (strings in the output)
- what stuff stays the same just once
- naming the nouns
    - subTotal
    - taxPercentage
    - taxAmount
    - discountPercentage
    - discountAmount
    - finalTotal

Write out pseudocode
    - defining inputs
    - try out variable names (expect that they might change)
    - defining process
        - what verbs need to happen to what nouns
        - what does each verb do
        - what's the order of the verb
        - after a verb happens to a noun, does that mean we need a new noun name to hold the result
    - do we need a loop? does the loop need to happen at least once?

code small small
once your specific problem is small enough, google exactly how to do it?
"how to generate a random number in javascript"
start converting tiny pieces of pseudocode into real code, take it from the top
what did happen vs. what you expected to happen?
does it make sense?
revisit variable (and function names) to see if they make sense

make small working pieces
use small working pieces in larger solutions

revisit the entire solution, read the problem
improve the accuracy and correctness
improve the readability of your code

## Debugging
"use strict" at the top of your script
double check your file paths
did you move the file while working on it, and you're editing one file while testing a different copy in the browser?
double check your link paths
bring up your JS console to look for syntax errors or 404s
try small things
change only one thing
what was the expected vs. actual result
change it back, try something different
hold as many things constant as possible
console.log all the things (or you'll be flying blind)

## Extra Exercises
https://www.reddit.com/r/programmingproblems
https://www.hackerrank.com/
www.codewars.com/