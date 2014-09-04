<?php require("../../includes/header.php"); ?><h1>TOM&JERRY</h1><div class="content">
<p> </p>
<p>Tom and Jerry are very good friends. They like to play several games. Today they are playing filling the jars, which is described as below.<br />
There are <b>n</b> jars of sizes <b>N1, N2, N3, ... and Nn.</b> The maximum number of cashews a jar can contain is equal to the size of the jar.<br />
Each player on his turn can put x number of cashews (where <b>x</b> is a perfect square and x&lt; 100) to any of the jar. The player who is unable to put cashews will lose.<br />
As Tom is stronger than Jerry, he will always start the game.<br />
You have to tell, who wins the game, if they both play optimally.</p>
<p><b>Note</b>: The total number of cashews is equal to the sum of the sizes of the jars.</p>

<p> </p>
<h3>Input</h3>
<p>First line contains <b>T</b>, the number of test cases.<br />
The first line of each test case contains <b>n</b>, the number of jars.<br />
The second line of a test case contains <b>n</b> space separated integers, denoting the sizes of the jars.</p>
<h3>Output</h3>
<p>For each test case, print in a new line who will win the game "Tom" or "Jerry" (quotes for clarity).</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>100</b></li>
<li><b>1</b> ≤ <b>n</b> ≤ <b>1000</b></li>
<li><b>1</b> ≤ <b>N1, N2, N3, ...,Nn</b> ≤ <b>100000</b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
1
2
4 5

<b>Output:</b>
Tom
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/s24w">s24w</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>19-03-2014</td>
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