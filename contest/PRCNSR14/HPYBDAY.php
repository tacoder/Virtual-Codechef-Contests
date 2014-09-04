<?php require("../../includes/header.php"); ?><h1>Happy Birthday Kazima</h1><div class="content">
<h3>Problem description.</h3>
<p>
Its Kazima's 13th birthday on this 13th and his father is very excited. To make this occasion memorable for him, he decides to decorate the venue of his birthday party with unique numbers having a special property-:  Sum of digits of each number is equal to the date of birth(only the date, not month or year!) of his lovely child.
</p>
<p>
The numbers are to be printed on posters of same size(one number on one poster). Size of the poster is the number of digits you want to write on the poster. On asking the decorator for this job, Kazima's father realized that he will have to pay the cost of decoration at the rate of maximum poster size length required. Now he is confused about how many digits he would at least need for making N numbers with this property as this would directly imply the poster sizes he would need. Can you help him realize answer for this problem ?
</p>
<h3>Input Description</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases.<br />
T lines follow each containing an integer N, numbers kazima wants to generate </p>
<h3>Output Description</h3>
<p>One Integer answer for every test case which is the minimum digits needed for generating N numbers
</p>
<h3>Sample Input</h3>
<p>
2<br />2<br />7</p>
<h3>Sample Output</h3>
<p>2<br />3 </p>
<h3>Sample Input Explanation</h3>
<p>
Numbers whose digits sum to 13 :  <i> 49,58,67,76,85,94,139,148,157,166... </i><br />
for just 2 such numbers we can pick for example 49 and 67 which would require only 2 digits<br />
for 7 numbers we will need 3 digits as only six 2 digit numbers have this property, one 3 digit number would be required
</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b> <b>T</b> ≤ <b>100</b></b></li>
<li><b>0 </b> ≤ <b> <b>N</b> ≤ <b>75000</b></b></li>
</ul>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/procon2014">procon2014</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>10-08-2014</td>
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