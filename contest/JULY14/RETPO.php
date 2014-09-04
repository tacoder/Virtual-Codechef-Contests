<?php require("../../includes/header.php"); ?><h1>Reach The Point</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/JULY14/mandarin/RETPO.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/JULY14/russian/RETPO.pdf">Russian</a>.</h3>
<p>Recently Chef bought a bunch of robot-waiters. And now he needs to know how much to pay for the electricity that robots use for their work. All waiters serve food from the kitchen (which is in the point <b>(0, 0)</b>) and carry it to some table (which is in some point <b>(x, y)</b>) in a shortest way. But this is a beta version of robots and they can only do the next moves: turn right and make a step forward or turn left and make a step forward. Initially they look in direction of <b>X-axis</b>. Your task is to calculate for each query the number of moves they’ll do to reach corresponding table.
</p>
<p> </p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows. For each test case there is a sing line containing two space-separated integers - <b>x</b> and <b>y</b>.</p>
<h3>Output</h3>
<p>For each test case, output a single line containing number of moves that robot will make to reach point <b>(x, y)</b></p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>-10<sup>9</sup></b> ≤ <b>x, y</b> ≤ <b>10<sup>9</sup></b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
2
3 3
3 4

<b>Output:</b>
6
7
</pre><p> </p>
<h3>Explanation</h3>
<p><b>Example case 1.</b> Sequence of moves would be LRLRLR</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/witalij_hq ">witalij_hq </a></td>
		</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>25-04-2014</td>
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