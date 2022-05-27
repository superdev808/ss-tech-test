# Store Space Technical Test
The purpose of this test is to allow us to get a basic understanding of your technical skill as well as to give us 
some code to review during your team interview. This test was designed to be finished in an hour or less. While you 
are free to spend as much time as you like completing the test, we recommend limiting yourself to one hour. 

**You will not be automatically rejected for submitting an incomplete test.**

Please fork the repository, answer the questions in your local fork, push the answers up to your GitLab fork, and
then notify Eric Schmiedel <eschmiedel@storespace.com> that you have completed the test.

## Alternative Option
Instead of completing this test, you may provide us with a link to a Git repository that houses a project you feel 
accurately demonstrates your current skill level. The project should be in JavaScript and/or PHP (ideally both). 
This project needs to have a sufficient level of complexity. A simple task scheduler or blog is not sufficient. 

## Question One
Create a function that accepts an array, and returns the array in reverse **without using array.reverse (JavaScript) or 
array_reverse (PHP)**. You may use either JavaScript or PHP. Place your answer file in the `src/question-1` directory.

Test conditions:
```
source - ['Apple', 'Banana', 'Orange', 'Coconut']
return - ['Coconut', 'Orange', 'Banana', 'Apple']
```

*ALTERNATIVE OPTION*

Create a function that determines whether a string is a palindrome. A palindrome is a word or phrase that is spelled 
the same in forwards and reverse. You may use either JavaScript or PHP. Place your answer file in the `src/question-1` 
directory.

Test conditions:
```
Level - returns true
Levels - returns false
Yo banana boy - returns true
```

## Question Two
Please follow the instructions below to build a simple JS app that consumes an API

- Build a simple page/view that displays a **responsive** list of cat facts, using (or not using) as many components as you'd like
- You **must** use either React or Vue.js
- You **must** use this specific endpoint to complete this task: https://catfact.ninja/facts?limit=9
- Each individual fact returned by the response from the above endpoint should be displayed as a card
  - The cards should be displayed on a grid or in a single column, depending on resolution
    - Desktop resolutions: 3x3 grid 
    - Mobile and tablet resolutions: Single column
  - The cards should be displayed in alphabetical, descending order based on the first letter of the fact being displayed
    - E.g.: "Cats are awesome!", "Dogs Stink", "Yes, I do love cats..."
- You may use a component library of your choice (such as Bootstrap, Vuetify, Material, etc.) or you may use Vanilla CSS

Once you have completed the app, please add the code to the `question-2` directory. You should include the `package.json` file so that we can install dependencies and run the application. **Do not** include the `node_modules` directory!

### Bonus Points
Bonus points will be awarded for implementing any of the following:
- Use TypeScript
- Implement testing (unit, functional, feature, behavioral, etc.)

## Question Three
Write unit tests for the `Entities/Facility.php` class in the `src/question-3` directory, and refactor the `getRouteParams()` method. 
Please use the PHPUnit testing library syntax. Place your test in the `src/question-3` directory and modify the 
`Facility.php` file for the refactor. **NOTE**: you do not need to install PHPUnit or actually run the tests. The goal is for us to be able to see how you write tests.

## Question Four
Hypothetically, the code in the `src/question-4` directory takes 5+ seconds to run. We want to speed this response up 
_without increasing server resources_. What tools/methods would you use to pinpoint the bottleneck?

**NOTE**: This question assumes a certain level of familiarity with Laravel (specifically the Eloquent ORM). If you
are not familiar with Laravel or the Eloquent ORM, please take a few minutes to review the documentation so you have
a better understanding.

**BONUS POINTS**: Refactor the offending method(s) with something more performant.
