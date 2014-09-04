<?php require("../../includes/header.php"); ?><h1>Android #18</h1><div class="content">
<p> </p>
<p>
In chefland, the attractiveness of the inhabitants could be described numerically.According to a survey, each person could be assigned two values one for physical appearance P and one for mental abilities M, more the values of P and M more attractive the person will be.Also some inhabitants were found to have negative values of P and M.</p>
<p>
Now Dr.Gero wanted to create an Android and let the Android blend into the crowd.But even after many attempts he failed to create one which could blend into the natural inhabitants without being considered un-humanly attractive or unattractive.So for his 18th attempt he turns to you for help.</p>
<p>
He doesn't want you to create the entire android but just to tell him the values of P and M he should keep for the android such that it has the least chances of being detected by the natural inhabitants as a fake.</p>
<p>
An android will have least chances of being detected by the inhabitants as fake if it's Similarity Quotient with the rest of the population is minimum.Similarity Quotient of the android will be given as the sum of <b>sqrt( (P-p<sub>i</sub>)<sup>2</sup>+(M-m<sub>i</sub>)<sup>2</sup> )</b> for all i, where p<sub>i</sub> and m<sub>i</sub> are the values of physical appearance and<br />
mental ability respectively of the ith natural inhabitant and P and M are the values for the android.</p>
<p>
Since there may be more than one set of valid values for P and M for which the conditions hold, you must just output the minimum Similarity Quotient.</p>
<p>
Help Dr.Gero make Android #18.</p>
<h3>Input</h3>
<p>
Each test file contains a single test case. The test case starts with a single line containing N ( 2&lt;= N &lt;= 1000 ). The next N lines contain two space separated values the physical appearance value p ( -1000&lt;= P &lt;= 1000 ) and the mental ability value m ( -1000 &lt;= m &lt;= 1000 ) for an inhabitant.Both p and m will be integers.
</p>
<h3>Output</h3>
<p>
Print a single line containing the minimum value of Similarity Quotient of the Android rounded to 2 decimal places.
</p>
<h3>Example</h3>
<pre><b>Input:</b>

4
-1 -1
1 -1
-1 1
1 1

<b>Output:</b>

5.66
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/amitrc17">amitrc17</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>7-01-2014</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>1 - 3 sec</td>
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