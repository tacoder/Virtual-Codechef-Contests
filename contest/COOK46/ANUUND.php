<?php require("../../includes/header.php"); ?><h1>Ups and Downs</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK46/mandarin/ANUUND.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK46/russian/ANUUND.pdf">Russian</a> as well.</h3>
<h3>Problem description</h3>
<p>You will be given a zero-indexed array <b>A</b>. You need to rearrange its elements in such a way that the following conditions are satisfied:</p>
<ul>
<li><b>A[i] ≤ A[i+1]</b> if <b>i</b> is even.</li>
<li><b>A[i] ≥ A[i+1]</b> if <b>i</b> is odd.</li>
</ul>
<p>In other words the following inequality should hold: <b>A[0] ≤ A[1] ≥ A[2] ≤ A[3] ≥ A[4]</b>, and so on. Operations <b>≤</b> and <b>≥</b> should alter.</p>
<h3>Input</h3>
<p>The first line contains a single integer <b>T</b> denoting the number of test cases. The first line of each test case contains an integer <b>N</b>, that is the size of the array <b>A</b>. The second line of each test case contains the elements of array <b>A</b></p>
<h3>Output</h3>
<p>For each test case, output a single line containing <b>N</b> space separated integers, which are the elements of <b>A</b> arranged in the required order. If there are more than one valid arrangements, you can output any of them.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>100000</b></li>
<li><b>Sum of N in one test file</b> ≤ <b>600000</b></li>
<li><b>1</b> ≤ <b>A[i]</b> ≤ <b>10^9</b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
2
2
3 2
3
10 5 2

<b>Output:</b>
2 3
2 10 5
</pre><p> </p>
<h3>Explanation</h3>
<p><b>Example case 1.</b><br /><br />
<b>A[0]</b> ≤ <b>A[1]</b> is satisfied, 2 ≤ 3.<br /></p>
<p><b>Example case 2.</b><br /><br />
<b>A[0]</b> ≤ <b>A[1]</b> is satisfied, 2 ≤ 10.<br /><br />
<b>A[1]</b> ≥ <b>A[2]</b> is satisfied, 10 ≥ 5.<br /><br />
<b>Note:</b> 5 10 2 is also valid answer.<br />
</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/anudeep2011">anudeep2011</a></td>
		</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>13-04-2014</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>3 sec</td>
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