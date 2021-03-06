<?php require("../../includes/header.php"); ?><h1>Lucky Driving</h1><div class="content">

<div>
<p>
        <i><br />
            "Nine is considered a <b>good</b> number in Chinese culture because it sounds the same as the word "long-lasting". Hence many<br />
            people want their car registration numbers to sum up to <b>9 </b>on adding the digits recursively.<br />
        </i><br />
        <br/>
    </br/></p>
<p>
        <i><br />
A car registration number can consist of 1,2,3 or 4 digits. Examples of some <b>good</b> car numbers are 63, 018, 9099, etc. whereas 12,129 are not            <b>good</b>.<br />
        </i>
    </p>
<p>
        <i>Why is <b>9099 good</b>?</i>
    </p>
<p>
        <i>9+0+9+9 = 27</i>
    </p>
<p>
        <i>2+7 = <b>9</b> </i>
    </p>
<p>
        <i>Similarly it is not difficult to see why 63, 018, 6669, 9999&hellip; are <b>good</b>."</i>
    </p>
<p>
        Given a string of digits, print how many subsequences of the string result in <b>good</b> car registration numbers.
    </p>
<p>
        <b>Note:</b>
    </p>
<p>
        The zeros at the starting of the number are to be accounted for, i.e. 018 and 18 are different numbers.
    </p>
<p>
        <b>Input</b>
    </p>
<p>
        First line of the input contains <b>T (T &lt;= 200) </b>denoting the number of test cases. <b>T </b>lines follow each containing a non-empty single<br />
        string <b>S</b>. <b>S</b> contains only digits i.e. from <b>[0-9]</b>. Length of <b>S &lt;= 10000</b>.
    </p>
<p>
        <b>Output</b>
    </p>
<p>
        For each case print how many subsequences of the string result in <b>good</b> car registration numbers. As the answer can be quite large print it modulo <b>1000000007</b>.
    </p>
<p>
        <b>Example</b>
    </p>
<p>
        <b>Input</b>
    </p>
<pre>
2
10292
0189
</pre><p></p>
<p>
        <b>Output</b>
    </p>
<pre>
2
6
</pre></div>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/kaushik_iska">kaushik_iska</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/laycurse">laycurse</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>21-04-2012</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>2 sec</td>
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