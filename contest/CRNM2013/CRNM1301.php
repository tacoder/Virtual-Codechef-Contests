<?php require("../../includes/header.php"); ?><h1>The Lost Number</h1><div class="content">

<p>The legendary Sherlock Holmes needs your help in solving a case. He has been trying to solve the case of The Lost Number for a long time and using his exceptional skills, has been able to discover all N parts of the number. He also knows that the Lost Number is the arrangement of these N parts, that results in the numerically maximum number.</p>
<p>Since he is very busy with other cases, he needs you to use your coding skills to  help him find The Lost Number. Given N numbers K<sub>1</sub> K<sub>2</sub> K<sub>3</sub>…K<sub>n</sub>, output the biggest number that can be formed by joining these N numbers.</p>
<h3>Input</h3>
<p>First line of the input contains the number of test cases T.<br/><br />
For each test case there are 2 lines of input-<br/><br />
The first line contains an integer N.<br/><br />
The second line contains N space separated numbers K<sub>i</sub>.</br/></br/></br/></p>
<h3>Output</h3>
<p>For each test case output a single line containing the maximum number that can be formed.</p>
<h3>Constraints</h3>
<p>1&lt;=T&lt;=20<br/><br />
1&lt;=N&lt;=100<br/><br />
1&lt;=K [i]&lt;=10^18<br/></br/></br/></br/></p>
<h3>Example</h3>
<pre>
<b>Input:</b>
3
3
4 1 8
2
231 942
2
59 542

<b>Output:</b>
841
942231
59542

<b>Explanation for the second test case:</b>
231 and 942 can have 2 possible arrangements 231942 and 942231.
Since 942231>231942, the correct answer is 942231.
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/sameer47">sameer47</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>29-01-2013</td>
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