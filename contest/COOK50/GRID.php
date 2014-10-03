<?php require("../../includes/header.php"); ?><h1>Sherlock and the Grid</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK50/english/GRID.pdf">English</a>, <a target="_blank" href="http://www.codechef.com/download/translated/COOK50/mandarin/GRID.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK50/russian/GRID.pdf">Russian</a> as well.</h3>
<p>Sherlock is stuck. There is a <b>N X N</b> grid in which some cells are empty (denoted by ‘<b>.</b>’), while some cells have rocks in them (denoted by ‘<b>#</b>’). Sherlock is on the South of the grid. He has to watch what is happening on the East of the grid. He can place a mirror at <b>45</b> degrees on an empty cell in the grid, so that he'll see what is happening on East side by reflection from the mirror.<br /><br /><br />
But, if there's a rock in his line of sight, he won't be able to see what's happening on East side. For example, following image shows all possible cells in which he can place the mirror.
</p>
<p><img src="http://www.codechef.com/download/COOK50/grid.jpg" /></p>
<p>You have to tell Sherlock in how many possible cells he can place the mirror and see what's happening on East side.</p>
<h3>Input</h3>
<p>First line, <b>T</b>, the number of testcases. Each testcase will consist of <b>N</b> in one line. Next <b>N</b> lines each contain <b>N</b> characters.</p>
<h3>Output</h3>
<p>For each testcase, print the number of possible options where mirror can be placed to see on the East side.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>1000</b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
2
3
#..
#..
#..
3
#.#
#.#
#.#

<b>Output:</b>
6
0
</pre><h3>Explanation</h3>
<p><b>Example case 1.</b> All places where rock are not there are valid positions.<br /><br />
<b>Example case 2.</b> No valid positions.</p>
<p><br /><br />
<b>Note:</b> Large input data. Use fast input/output.<br /><br />
Time limit for PYTH and PYTH 3.1.2 has been set 8s.</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/darkshadows">darkshadows</a></td>
		</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>5-06-2014</td>
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
    </table><?php require("../../includes/footer.php"); ?>