# Readable-code

## Cadre:

This exercise is carried out as part of our fourth week of training at BECODE the 17 of march.

## Technos :

PHP

## Auteurs:

[Chardome Thomas] (https://github.com/ChardomeThomas)

## Learning Objectives

- To be able to make decisions about when and how to refactor less readable code.
- To be able to adhere to known PHP code standards like PSR2.
- To be able to think critically about code principles and not follow them blindly.

## The Mission

Imagine: during your internship, you get handed an existing project to maintain.  
You try to read into the project, but there's no readme 😱, you see variables like `$a` or `$dontChangeThis` and the last developer with project knowledge just left.  
You wouldn't wish that to anyone, would you? Now, let's see what we can do to prevent this from happening with a focus on readability!

For projects with a longer lifespan, focusing on this is always a good idea.  
Whatever bugs you spot or changing requirements you'll need to meet, it will allow you to make modifications as easily as possible.

> It's totally fine to write code however you like during experiments! Don't let your efforts to write clean code hinder you. It's an ongoing effort and shouldn't be perfect from the start.

### Must-have features

- Have a look at [this code](experimental.php) and try to understand what it does.
- Read the following article:
  - [Jason McCreary on writing clean code](https://dev.to/gonedark/writing-clean-code)
  - Do not install PHP codesniffer at this point (yet)
- Have the code follow a consistent writing standard. For now, we'll roll with the widely used [PSR2](https://www.php-fig.org/psr/psr-2/).
  - Focus just on what you need for now (functions, variables).
  - Use them examples instead of the instructions, they are much easier to use.
- Rewrite the file in a way that would improve readability for you (keep everything to one file). Read below for tips.
- Some time left? Help your peers - being able to do this, is a very valuable skill.

We'll end with a group discussion to combine all ideas, so think of some tips to share.
From now on, try to adhere to these principles. (experimental code is fine for... experiments though!)

### Tips

- Don't aim for perfect all the time, aim for good enough / continuous improvement. Don't be too harsh on yourself!
- When refactoring, focus on one section (or one thing) first (e.g. a specific function or clear naming).
- Work in small steps. Write these as separate [todo's](https://dev.to/razbakov/todo-in-code-b) if you like. Test after every step and use small commits when you're sure everything still works.
- When in doubt what approach is better, think "what would help me to understand this quickly if I see it again a year from now".
- Be critical: if you think a certain tip isn't beneficial to your code, ignore or tweak it.
- When getting used to a standard, don't jump to auto-rewrites immediately. Get used to write code following the standard yourself first.

> If you get stuck, don't hesitate to ask for help!

## Deployed project:

Github link : https://github.com/ChardomeThomas/readable-code
