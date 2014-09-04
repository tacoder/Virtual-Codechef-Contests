<?php require("../../includes/header.php"); ?><h1>Gravel</h1><div class="content">

<p>Bob has n heap(s) of gravel (initially there are exactly c piece(s) in each). He wants to do m operation(s) with that heaps, each maybe:</p>
<ul>
<li>adding pieces of gravel onto the heaps from u to v, exactly k pieces for each,</li>
<li>or querying "how many pieces of gravel are there in the heap p now?".</li>
</ul>

<h3>Request</h3>
<p>Help Bob do operations of the second type.</p>
<h3>Input</h3>
<p><ul>
<li>The first line contains the integers n,m,c, respectively.</li>
<li>m following lines, each forms:
<ul>
<li><b>S u v k</b> to describe an operation of the first type.</li>
<li><b>Q p</b> to describe an operation of the second type.</li>
</ul>
</li>
<p>
<b><em>(Each integer on a same line, or between the characters S, Q and the integers is separated by at least one space character)</em></b>
</p></ul>
</p>
<h3>Output</h3>
<p>For each operation of the second type, output (on a single line) an integer answering to the respective query (follows the respective Input order).</p>
<h3>Example</h3>
<p><b>Input:</b></p>
<pre>
7 5 0
Q 7
S 1 7 1
Q 3
S 1 3 1
Q 3
</pre><p>
<b>Output:</b></p>
<pre>
0
1
2
</pre><h3>Limitations</h3>
<ul>
<li>0&lt;n≤10<sup>6</sup></li>
<li>0&lt;m≤250 000</li>
<li>0&lt;u≤v≤n</li>
<li>0≤c,k≤10<sup>9</sup></li>
<li>0&lt;p≤n</li>
</ul>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/anhdq">anhdq</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/rajivka">rajivka</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>5-05-2010</td>
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
            <td>ADA, ASM, BASH, C, C99 strict, CLOJ, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, FORT, FS, GO, ICON, JAR, JAVA, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PYTH, PYTH 3.1.2, RUBY, SCM guile, SCM qobi, ST, TCL</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>