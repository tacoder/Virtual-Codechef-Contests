<?php require("../../includes/header.php"); ?><h1>Copy-Paste</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK48/mandarin2/RRCOPY.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK48/russian/RRCOPY.pdf">Russian</a> as well.</h3>
<p> </p>
<p>You had an array of integer numbers. You also had a beautiful operations called "Copy-Paste" which allowed you to copy any contiguous subsequence of your array and paste it in any position of your array. For example, if you have array <b>[1, 2, 3, 4, 5]</b> and copy it's subsequence from the second to the fourth element and paste it after the third one, then you will get <b>[1, 2, 3, 2, 3, 4, 4, 5]</b> array. You remember that you have done a finite(probably zero) number of such operations over your initial array and got an array <b>A</b> as a result. Unfortunately you don't remember the initial array itself, so you would like to know what could it be. You are interested by the smallest such array. So the task is to find the minimal size(length) of the array that <b>A</b> can be obtained from by using "Copy-Paste" operations. </p>
<p> </p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.<br />
The first line of each test case contains a single integer <b>N</b> denoting the number of elements in obtained array <b>A</b>. The second line contains <b>N</b> space-separated integers <b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>, ..., <b>A<sub>N</sub></b> denoting the array.</p>
<p> </p>
<h3>Output</h3>
<p>For each test case, output a single line containing the answer.</p>
<p> </p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>20</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>1</b> ≤ <b>A<sub>i</sub></b> ≤ <b>10<sup>5</sup></b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
2
5
1 1 1 1 1
5
1 2 3 1 2

<b>Output:</b>
1
3
</pre><p> </p>
<h3>Explanation</h3>
<p>In the first case we could have only array <b>[1]</b> in the beginning and then obtain <b>[1, 1]</b>, then <b>[1, 1, 1, 1]</b> and finally <b>[1, 1, 1, 1, 1]</b>. In the second one we could obtain <b>A</b> from <b>[1, 2, 3]</b> by copying it's first two elements to the end. </p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/Rubanenko">Rubanenko</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/shiplu">shiplu</a></td>
				</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>5-07-2014</td>
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