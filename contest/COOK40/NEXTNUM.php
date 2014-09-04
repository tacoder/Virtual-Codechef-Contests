<?php require("../../includes/header.php"); ?><h1>Rank of the Number</h1><div class="content">
<h3>Read problems statements in Russian <a target="_blank" href="/download/translated/COOK40/russian/NEXTNUM.pdf">here</a></h3>
<p>The Head Chef has received his id from the Association of Byteland . He wants to know the numerical rank of his number among the numbers that can be formed by the exact same digits ( i.e. among numbers having same number of 0's , 1's ... 9's as his id ) .  Note that id's can start with 0 . Given a number, find the rank of the number .</p>
<h3>Input</h3>
<ul>
<li>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</li>
<li> Each test case contains a single integer <b>N</b> denoting the id the chef has received . </li>
</ul>
<h3>Output</h3>
<ul>
<li>For each test case, output a single line containing the answer to the given test case . </li>
</ul>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10000</b></li>
<li><b>1</b> ≤ <b>number of digits in N</b> ≤ <b>18</b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
2
276
762

<b>Output:</b>
2
6
</pre>
<h3>Explanation</h3>
<p><b>Example case 1.</b>The numbers that can be formed with one '2' ; one '7' and one '6' in increasing order are : <br /><br /> 267 <br /><br /> 276 <br /><br /> 627 <br /><br /> 672 <br /><br /> 726 <br /><br /> 762 <br /><br /> The <b> rank </b> for 276 is 2 and <b>rank</b> for 762 is 6.</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/vineetpaliwal">vineetpaliwal</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/rubanenko">rubanenko</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>1-11-2013</td>
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