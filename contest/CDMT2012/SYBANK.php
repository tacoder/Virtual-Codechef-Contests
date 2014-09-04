<?php require("../../includes/header.php"); ?><h1>Bank of Synapse</h1><div class="content">

<p> Customers of the Bank of  Synapse handle their banking transactions similar to the way they handle their taxes: be as terse as possible. As a result, when a customer writes a check or fills out a deposit or withdrawal form, they leave off the year on any date they write down. So, instead of writing: 02/06/2012, they would write: 02/06 and be done with it. In general, the year can be inferred since it will be relatively close to the date the transaction is actually processed by the bank.<br />
Without going into the intricate details of how the Bank of Synapse calculates interest and banking fees (that is a problem for another time...), suffice to say the bank must determine the actual date the customer wrote on the check or form, and calculate the number of days prior (or in the future) the document is dated. You see, Synapse bankers, like their government officials, are overworked, so they may not get around to processing transactions for up to a week. The customers know this, so they often date their checks and forms a several days in the future &ndash;this complicates the bankers&rsquo; duties as well.<br />
Your job is to write a program to compare a date written on a check or form with the date the transaction is being processed, and, determine the full date the customer meant as well as how many days prior (or in the future) the document is dated.</p>
<h3>Input</h3>
<p>The first line of input contains an integer N which is the number of Test Cases that follow (1 &lt;= N &lt;= 1000).</p>
<p> Each Testcases consists of a single line containing two dates: the transaction date and the document date; there is a single space between them. The transaction date is of the form M/D/Y where M is the month number (1 &lt;= M &lt;= 12), D is the day of month (1 &lt;= D &lt;= md1) and Y is the year (2000 &lt;= Y &lt;= 2200). The document date is of the form m/d where m is the month number (1 &lt;= m &lt;= 12) and d is the day of month (1 &lt;= d &lt;= md2). The values of md1 and md2 will not exceed the number of days in the respective months M and m. </p>
<h3>Output</h3>
<p>For each Testcase output the results accordingly<br />
<br />
1>m/d/y IS n DAY(S) PRIOR:If the document date occurs before the transaction date and is within 7 days in the past<br />
<br />
2> m/d/y IS n DAY(S) AFTER:If the document date occurs after the transaction date and is within 7 days in the future.<br />
<br />
3>SAME DAY:If the dates are the same<br />
<br />
4>OUT OF RANGE:All other results not with +/- 7 days.
</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
7 
11/20/2012 11/21 
11/20/2012 11/17 
11/20/2012 11/20 
11/20/2012 11/13 
11/20/2012 11/28 
1/2/2012 12/30 
12/31/2100 1/3 

<b>Output:</b>
11/21/2012 IS 1 DAY AFTER
11/17/2012 IS 3 DAYS PRIOR
SAME DAY
11/13/2012 IS 7 DAYS PRIOR
OUT OF RANGE
12/30/2011 IS 3 DAYS PRIOR
1/3/2101 IS 3 DAYS AFTER
</pre><p>NOTE:When printing the result date, m/d/y, you will have to determine the year value y (1999 &lt;= y &lt;= 2201). This is not necessarily the same as the transaction date&rsquo;s year value Y. The Bank of Synapse follows the Gregorian Calendar .As such, Gregorian leap year rules apply. A year is a leap year (February has 29 days instead of 28) if the year if evenly divisible by 4, except for century years (those ending in 00), which are leap years only if they are evenly divisible by 400. 2000 and 2004 are leap years, but 2100 and 2101 are not. For those who do not know, the months of January, March, May, July, August, October and December all have 31 days in them. February has 28 days (unless in a leap year, then it has 29). The remainder of the months has 30 days. </p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/wizgen">wizgen</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>13-02-2012</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>1 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>