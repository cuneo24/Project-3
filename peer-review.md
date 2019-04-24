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

+ I first tried no data in the text field, and as expected, it was required.
+ I tried putting junk data (symbols, numbers, and non-note letters) and the validation refused it all. Good work there.
+ I did find many oddities when trying to enter invalid data into the text field and trying to submit it. I will list my exact steps to
finding them here:
    + When entering data with no successful attempts prior, the retention of my choices works as expected with no oddities found.
    + When entering data after a successful attempt, I start by entering '!' into the text field. When I submit I receive the       appropriate error, but when I click again, the root ops field clears itself.
    + When entering data after a successful attempt, I start by entering '7' into the text field. I get the same results as before when
    entering '!'. Continuing to just click submit toggles the root ops being checked and unchecked
    + When entering a letter but not one that is valid, I receive the appropriate error message saying that, for instance, 'Z' is not a valid note. When trying to trigger a different error at this point, such as entering an '!', validation does not update the error list until the submission is valid or another improper letter is entered.
+ I finished testing after this point as I believe there is something wrong with how some information is stored and how some errors are
presented


## 3. Code: Routes
+ The routes used in this application have been utilized correctly. There is no code that does not belong.

## 4. Code: Views
+ Template inheritance is present
+ I am seeing the use of @php a few times in the view, but it simply appears to be small convenience code, and nothing major
+ I see no techniques I am unfamiliar with
+ For the 'root_ops' radio buttons, the conditionals for setting 'checked' are different:
```html
 <input type="radio" name="root_opts" value="nat"
                {{ (old('root_opts') != 'nat' || $inputs['root_opts'] != 'nat') ? 'checked' : '' }}
            >♮
            <input type="radio" name="root_opts" value="sharp"
                {{ (old('root_opts') == 'sharp' || $inputs['root_opts'] == 'sharp') ? 'checked' : ''  }}
            >♯
            <input type="radio" name="root_opts" value="flat"
                {{ (old('root_opts') == 'flat' || $inputs['root_opts'] == 'flat') ? 'checked' : ''  }}
             >♭@include('snippets.req')
```
+ Inconsistent naming conventions used throughout - some names use camel case, some use underscores
+ I found the potentional problem code in reference to the issue of the error list not being updated properly:
```html
 @if (isset($root_error))
                <ul id="errors-list">
                    <li class="errors">{{ $root_error }}</li>
                </ul>
                <br>
            @elseif(count($errors) > 0)
                <ul id="errors-list">
                    @foreach ($errors->all() as $error)
                        <li class="errors">{{ $error }}</li>
                    @endforeach
                </ul>
                <br>
            @endif
```
root_error, from viewing the controller, seems to populate and trigger when the letter entered is not a musical note. The application retains the data in root_error, and when trying to trigger the non-letter error by entering an '!' after root_error is triggered in the same session, the conditional will always choose to display the non-note letter error triggered by root_error being populated first unless the new submission directly overwrites it. Perhaps a way to remedy this issue would have been check if root_error was set *and* if it matched the previous input entered.


## 5. Code: General
Address as many of the following points as applicable:

+ I found following the controller and some parts of the view rather difficult without comments as there are a large number of 
similarly named variables being used and referenced throughout - the ones that were present did not help very much to aid in my understanding
+ In the controller, variables are not named using camel case, but instead by using underscores, ie. 'twelve_tones', 'black_keys', and 'maj_scale_pattern'

## 6. Misc
N/A
