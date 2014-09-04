<?php require("../../includes/header.php"); ?><h1>The Pillars</h1><div class="content">

<p>The dark of the moon is no longer a secret. The Decepticon&rsquo;s leader Megatron has captured the teleportation device comprising of the pillars. These pillars, when specially oriented, form a space bridge which can be used to bring back their lost planet- &ldquo;Cybertron&rdquo;. But the pillars can only be controlled and operated by Sentinel Prime. He is a technology inventor who can alone operate the teleportation device.  For the sake of their lost planet, both have joined hands to bring back their planet Cybertron. However the pillars should be arranged in a particular order to commence teleportation.<br />
The pillars are of number n that should be placed in n &times; n grid. The pillars are placed at random in the squares of the grid, at most one pillar per square. In a single move, any single pillar can move into an unoccupied location one unit horizontally or vertically in the grid. This is done to create a &ldquo;teleportation wall,&rdquo; i.e., to line up all n pillars in a straight line either horizontally, vertically, or diagonally. However, Sentinel wants that Optimus prime should not know about any of these activities so he asks Megatron to place pillars using the fewest number of moves.</p>
<h3>Input</h3>
<p>The input consists of multiple cases. Each case begins with a line containing an integer n (where n is the number of pillars), 1 &le; n &le; 15. The next line contains the row and column numbers of the first pillar, followed by the row and column numbers of the second pillar, and so on. Rows and columns are numbered as in the above diagram.</p>
<h3>Output</h3>
<p>For each input case, display the case number (1, 2,&hellip;) followed by the minimum number of moves needed to line up the n pillars into a straight-line wall. Follow the format shown in the sample </p>
<h3>Example</h3>
<pre>
<b>Input:</b>
5
1 2 2 4 3 4 5 1 5 3
<b>Output:</b>
6
<b>Input:</b>
5
1 1 2 1 3 1 4 1 5 1
<b>Output:</b>
0
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/bestankur007">bestankur007</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>12-03-2012</td>
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