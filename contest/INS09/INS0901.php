<?php require("../../includes/header.php"); ?><h1>ALIEN CELL</h1><div class="content">

<p>
Dr Doom, master of Destruction, is conducting research on extraterrestrial psychosomatic cells, the results of which he plans to use in creating an extraterrestrial-human hybrid clone army.<br />
He has found that the extraterrestrial psychosomatic cell is composed of two kind of fluids: xenoplasm and hominoplasm.<br />
After further studies and constant interruption by sundry superheroes trying in vain to stop his destructive juggernaut, he discovers that for a living cell, hominoplasm is always found within the xenoplasm and when a cell dies, the hominoplasm oozes out of the xenoplasm.<br />
Xenoplasm can be identified by the presence of "a" granules and hominoplasm by "b" granules.<br />
Dr Doom, unable to find time for his favourite pastime of snapping superhero limbs, soon gets bored of manually checking if the cell is dead or alive.<br />
He wants to automate the process.<br />
Fortunately for him (and unfortunately for Atomigirl, his latest captive) he has a very powerful false colour electron-scanning microscope using which he can find the co-ordinates of  "a" granules and "b" granules.<br />
You are Master Mayhem, Doctor Doom's faithful sidekick.<br />
Out of a deep-seated hatred of the world stemming from being constantly picked upon and bullied from kindergarten to grad school, you must help Dr Doom to identify living and dead cells and get that much closer to the attack of the alien-hybrid clones!</p>
<h3>Input</h3>

<p>
First line gives <i>t</i> , the number of testcases ( t ≤ 20). Then t test cases follow.</p>
<p>For each testcase:<br />
The first line gives two integers <i>n</i> and <i>k</i>, (3 ≤ <i>n</i> ≤ 10<sup>6</sup> , 3 ≤ <i>k</i> ≤ 10<sup>6</sup>)<br />
where <i>n</i> is the number of granules of type "a"<br />
and <i>k</i> is the number of granules of type "b".</p>
<p>The next n lines give 2  integers <i>x y</i> each, where <i>x</i> and <i>y</i> are the coordinates of granules  "a".<br />
Next k lines give the coordinates of granules "b" (like for granules a).<br />
(-3000 ≤ <i>x</i> ≤ 3000 and -3000 ≤ <i>y</i> ≤ 3000)</p>
<h3>Output</h3>

<p>
For each test case output a single line. <br />
"Yes" if the cell is a living cell<br />
and output "No" if the cell is dead.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
1
3 3
0 0
4 0
0 4
1 0
3 0
1 3

<b>Output:</b>
Yes
</pre>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/fctrl">fctrl</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>14-10-2009</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>