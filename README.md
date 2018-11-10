TDD kata
========

TDD Kata to do some exploratory tests on my own


# problem

In order to deliver value to our customer in our company we work with vehicles.
This vehicles need some maintenance and must be clean, so we want to create a training process for our operations people in charge to maintain the vehicles up to date.
We've create a training program which has 100 days of duration each time we hire a new operations people.

The program follows this rules:
- Each day the operations people must go to mechanic and follow orders from the mechanic boss.
- If the day is divisible by three, the operations people must spend the day clean vehicles.
- If the day is divisible by five, the operations must check wheel (pressure and check optimal conditions of wheel).
- If the day is divisible by three and five, the operations must do both (clean and wheel).

Write a program given a number of the day will say to the operations people what to do in the current day.
The operations people receive an SMS each day with a string with an abstract about their daily work.

# Phase 1

given a number from 1 to 100 build a program which output is:


```
mechanic
mechanic
clean
mechanic
wheel
clean
mechanic
mechanic
clean
wheel
mechanic
clean
mechanic
mechanic
clean and wheel
mechanic
mechanic
clean
mechanic
wheel
... etc up to 100
```
