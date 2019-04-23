## P3 Peer Review

+ Reviewer's name: Michael Cuneo
+ Reviwee's name: Nathaniel Hunt
+ URL to Reviewee's P3 Github Repo URL: https://github.com/nathanielhunt/p3

## 1. Interface

+ My initial impression is that the interface itself is clean and perfectly simple. Not too much to say about it. It works for its purpose.
+ The placement of the two boxes to the left seemed an odd choice as they seem fairly far away from the rest of the content.
+ I thought the appearance of the piano was formatted well and actually looked pretty cool, despite me not knowing how to read it. I
will assume it is accurate.
+ Just to be on the picky side, I believe choosing the root note to be a dropdown would have been more efficient design as 
there are so few of them to choose from, but it is suitable enough for the requirements of the project itself. Otherwise everything
worked exactly as I would've expected.


## 2. Functional testing
One challenge of developing software is thinking of all the unexpected ways users might interact with our applications. It's easy to develop &ldquo;blinders&rdquo; to methods of interaction because we know so much about *how* our application works, and so we have a hard time imagining how our interfaces might be misinterpreted. Thus, it can be useful to have an outsider rigorously test our applications with the explicit intention of trying to break it.

Knowing this, it's time to put your reviewee's application to the test. Think of all the unexpected ways their application could be used with the intention of trying to produce some unexpected/undesirable outcome.

Examples...
+ I first tried no data in the text field, and as expected, it was required.
+ I tried putting junk data (symbols, numbers, and non-note letters) and the validation refused it all. Good work there.
+ I did find many oddities when trying to enter invalid data into the text field and trying to submit it. I will list my exact steps to
finding them here:
    + When entering data with no successful attempts prior, the retention of my choices works as expected with no oddities found.
    + When entering data after a successful attempt, I start by entering '!' into the text field. When I submit I receive the       appropriate error, but
when I click again, the root ops field clears itself.
    + When entering data after a successful attempt, I start by entering '7' into the text field. As oppose to the previous attempt
with '!', the root ops field clears itself immediately.
    + After these two results, I noticed that upon page refresh, memory is retained in a very odd fashion. I tried refreshing the page but it
did nothing to reset my previous results. I quit the page entirely and came back to three errors, saying that the root note, root ops field,
and the scale type field are all required. I would expect a new session to be started at this point with auto-populated data with C flat
as default.
+ I gave up testing after this point as I believe the above mentioned issues are related to how memory is stored and deleted in the 
application as a whole.


## 3. Code: Routes
Skim through the student's code on Github.

Find their routes file (`routes/web.php`). Thinking about ideal Route/Controller organization&mdash; is there any code in this file that should be happening in a Controller?

If yes, describe.

## 4. Code: Views
Skim through the View files in `/resources/views` and address as many of the following points as applicable:

+ Is template inheritance used?
+ Are there any separation of concern issues (i.e. non-display specific logic in view files)?
+ Did they do anything in PHP that could have been done in Blade?
+ Did they use any Blade syntax/techniques you were unfamiliar with?

## 5. Code: General
Address as many of the following points as applicable:

+ Do you notice any inconsistencies between the code and the course notes on [code style](https://github.com/susanBuck/dwa15-fall2018/blob/master/misc/code-style.md)?
+ Are there any best practices discussed in course material that you feel were not addressed in the code?
+ Are there aspects of the code that you feel were not self-evident and would benefit from comments?
+ Are there any parts of the code that you found interesting/would not have thought to do yourself?
+ Are there any parts of the code that you don't understand?

## 6. Misc
Do you have any additional comments not covered in the above questions?
