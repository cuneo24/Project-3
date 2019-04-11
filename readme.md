# Project 3
+ By: Michael Cuneo
+ Production URL: <http://p3.cuneocourse.me>

## Outside resources
N/A

## 3 Unique inputs
1. Text input to fill in multiple fields
2. Checkboxes to indicate whether or not to include a cell phone number or department email on business card
3. Dropdown to choose what Campus Services department
4. Email input to accept both business and department emails
5. Tel input for mobile users on cell and business phone numbers

## Packages
You will find *dompdf/dompdf* in the Git *composer.json* file for turning HTML into a PDF using PHP. For my purposes I found that
turning the business card into a PDF via Javascript was a much more logical solution, so you will not find this package on production.
It was never implemented in my application.

## Code style divergences
1. Used ```<div>``` elements to mark a couple large portions of the HTML document as wrappers
2. Used ```<span>``` elements for complex formatting for the business card itself
