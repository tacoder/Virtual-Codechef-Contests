<?php require("../../includes/header.php"); ?><h1>Calendar</h1><div class="content">

<p>We know that there are so many calendar systems. For example, Bangla, Christ, Arabic, Chinese etc. This problem is about Decimal calendar. There are <b>3</b> months in this calendar. First month is <b>"Hundreds"</b>. There are <b>300</b> days in this month. Second month is <b>"Tens"</b>. There are <b>60</b> days in this month. And this followed by the last month <b>"Ones"</b> having <b>5</b> or <b>6</b> days depending on whether this is leap year or not. A Decimal year spans a full Christ calendar. That is <b>1st</b> Hundreds in Decimal Calendar is 1st January in Christi Calendar. Similarly, 31st December of Christ Calendar is <b>5th</b> or <b>6th</b> day of Decimal calendar (depending on whether it is leap year or not).</p>
<p>A year in Decimal calendar is leap year if the corresponding Christ year is leap year. For example, the Decimal year corresponding to <b>2000</b> Christ year is leap year but <b>2001</b> is not, and again <b>1900</b> is not leap year too. A year in Christ calendar is leap year if the year is divisible by <b>400</b> or divisible by <b>4</b> but not by <b>100</b>.</p>
<p>You are given a day in Christ calendar in <b>DD-MMM-YYYY</b> format (<b>DD</b> stands for day, <b>MMM</b> stands for first <b>three</b> letters (in <b>CAPS</b>) of the month and <b>YYYY</b> stands for the year). You are to give the date in Decimal Calendar format.</p>
<h3>Input</h3>

<p>First line contains number of test case. Every test case consists of a date in Christ Calendar format in each line.</p>
<h3>Output</h3>

<p>You are to output the case number and the date in Decimal Calendar format. Output the date and the month in the Decimal Calendar.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
3
01-JAN-1900
10-JAN-1900
16-DEC-1900

<b>Output:</b>
Case 1: 1 Hundreds
Case 2: 10 Hundreds
Case 3: 50 Tens

<b>Note</b>
First three letters for the months are:
JAN, FEB, MAR, APR, MAY, JUN, JUL, AUG, SEP, OCT, NOV, DEC.
</pre>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/admin">admin</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>28-10-2011</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>5 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>C, C99 strict, CPP 4.3.2, CPP11, GO, JAVA, NODEJS</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>