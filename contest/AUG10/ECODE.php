<?php require("../../includes/header.php"); ?><h1>Exit code</h1><div class="content">

<p>Professor X got lost in a maze of an ancient tomb in Egypt. While he was finding the way to escape, he got a message of the tomb builders on the old walls:</p>
<p><ul>
<li>The code to open the exit door is the sequence C of n digits formed c<sub>1</sub>..c<sub>n</sub> (c<sub>i</sub>∈[0,9] ).
</li>
<li>For every sequence C, combining with the given integers A,B, call:
<ul>
<li>h<sub>0</sub>=0</li>
<li>h<sub>i</sub>=(h<sub>i-1</sub>×A+c<sub>i</sub>)  mod B</li>
</ul>
<p>
</p></li>
<li>The smallest sequence C (in lexicological order) satisfying h<sub>n</sub>=G (where G is a given integer) is the exit code which professor X needs.</li>
<h3>Request</h3>
<p>Give the integers n,A,B,G, help professor X find out the exit code!</p>
<h3>Input</h3>
<p>One and only line contains the integers n,A,B,G, respectively, each of them is separated with at least one space character.</p>
<h3>Output</h3>
<p>Output in a single line the exit code found.</p>
<h3>Example</h3>
<p><b>Input:</b></p>
<pre>
3 11 111 92
</pre><p>
<b>Output:</b></p>
<pre>
084
</pre><h3>Limitations</h3>
<ul>
<li>1≤n≤12</li>
<li>10≤A,B≤10<sup>15</sup></li>
<li>0≤G&lt;B</li>
<li>The input satisfies that the answer always exist.</li>
</ul>
</ul>
</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/anhdq">anhdq</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/innocentboy">innocentboy</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>5-05-2010</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>6 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>