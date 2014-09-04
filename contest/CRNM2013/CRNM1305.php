<?php require("../../includes/header.php"); ?><h1>Bombs</h1><div class="content">

<p>James Moriarty planted few bombs all over the city. But sadly there is only one bomb defusing squad, and is at a fixed position (X,Y). Sherlock Holmes was able to find out the positions of all the bombs. So all the bombs are to be disarmed in order to save the city. Since this is a very dangerous task thus no body volunteered. </p>
<p>
Sherlock is initially at position (X,Y) and can carry only one bomb at a time.  He has to bring all the bombs to the bomb defusing squad. Obviously he wants to do this task as soon as possible.</p>
<p>
Given the position of the Squad and position of all the bombs, you need to tell the minimum distance that Sherlock Holmes has to travel to save the city.</p>
<h3>Input</h3>
<p>First line contains test cases T&lt;=400.</p>
<p>Then first line of each test case tells the no. of bombs N ( 3&lt;=N &lt;=1500) in the city.</p>
<p>Next line contain the position of squad X Y ( X,Y &lt;=100).</p>
<p>Next N lines denotes the position of bombs- x<sub>i</sub> y<sub>i</sub> (x<sub>i</sub>,y<sub>i</sub>&lt;=100).</p>
<h3>Output</h3>
<p>For each test case output the minimum distance that Sherlock Holmes will travel.</p>
<p><pre>
<b>Note:</b>
Bomb Squad is fixed and can not move.
Initially Sherlock Holmes is standing with the squad.
All the positions are integers.
Minimum Distance between two points x<sub>1</sub> y<sub>1</sub> and x<sub>2</sub> y<sub>2</sub> is | x<sub>1</sub>-x<sub>2</sub> | + | y<sub>1</sub>-y<sub>2</sub> |.
</pre><h3>Example</h3>
<pre>
<b>Input:</b>
1
3
3 4
5 6
2 1
2 3

<b>Output:</b>
20
</pre></p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/sameer47">sameer47</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>6-02-2013</td>
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