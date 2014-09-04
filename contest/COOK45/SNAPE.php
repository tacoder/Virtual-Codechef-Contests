<?php require("../../includes/header.php"); ?><h1>Snape and Ladder</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK45/mandarin/SNAPE.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK45/russian/SNAPE.pdf">Russian</a> as well.</h3>
<p></p><p>Professor Snape has lots of potions. Bottles containing all types of potions are stacked on shelves which cover the entire wall from floor to ceiling. Professor Snape has broken his bones several times while climbing the top shelf for retrieving a potion. He decided to get a ladder for him. But he has no time to visit Diagon Alley. So he instructed Ron Weasley to make a ladder for him. Professor Snape specifically wants a step ladder which looks like an inverted 'V' from side view.<br /><img src="http://www.codechef.com/download/XxAtE7i.png" /></p>
<p>Professor just mentioned two things before vanishing-</p>
<ul>
<li><b>B</b> - separation between left side (LS) and right side (RS) on the ground</li>
<li><b>LS</b> - the length of left side</li>
</ul>

<p>What should be the length of <b>RS</b>? At one extreme <b>LS</b> can be vertical and at other <b>RS</b> can be vertical. Ron is angry and confused. Since Harry is busy battling Voldemort, its your duty to help him find the minimum and maximum length of <b>RS</b>.</p>
<h3>Input</h3>
<p>First line contains single integer <b>T</b>, the number of test cases. Then <b>T</b> lines follow each containing 2 integers - <b>B</b> and <b>LS</b>.</p>
<h3>Output</h3>
<p>Output <b>T</b> lines, each containing minimum value of <b>RS</b> and maximum value of <b>RS</b>, separated by space. The answer (<b>RS</b>) will be considered correct if it has relative and absolute error less than 10<sup>-2</sup>.</p>
<h3>Constraints</h3>
<p>1 ≤ <b>T</b> ≤ 1000<br />1 ≤ <b>B</b> &lt; <b>LS</b> ≤ 1000</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
3
4 5
10 12
10 20

<b>Output:</b>
3.0 6.40312
6.63325 15.6205
17.3205 22.3607
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/vinayak garg">vinayak garg</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/gerald">gerald</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>24-01-2013</td>
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