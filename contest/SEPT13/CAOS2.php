<?php require("../../includes/header.php"); ?><h1>CAO Stage-2</h1><div class="content">
<h3>Problem Statement</h3>
<p><b>Past</b></p>
<p>In the year of 2048, the Virtual Reality Massively Multiplayer Online Role-Playing Game (VRMMORPG), <strong>Code Art Online (CAO)</strong>, is released. With the Chef Gear, a virtual reality helmet that stimulates the user's five senses via their brain, players can experience and control their in-game characters with their minds.</p>
<h3>Problem Statement</h3>
<p><b>Past</b></p>
<p>In the year of 2048, the Virtual Reality Massively Multiplayer Online Role-Playing Game (VRMMORPG), <strong>Code Art Online (CAO)</strong>, is released. With the Chef Gear, a virtual reality helmet that stimulates the user's five senses via their brain, players can experience and control their in-game characters with their minds.</p>
<p>On August the 2nd, 2048, all the players log in for the first time, and subsequently discover that they are unable to log out. They are then informed by Code Master, the creator of CAO, that if they wish to be free, they must reach the second stage of the game.</p>
<p>Kirito is a known star player of CAO. You have to help him log out.</p>
<p><b>Present</b><br /> <br /> <i>Stage 2</i></p>
<p>A map is described by a 2D grid of cells. Each cell is either labelled as a <b>#</b> or a <b>^</b>. <b>#</b> denotes a wall. A monster exists in a cell if the cell is not a wall and the cell is a <b>centre of Prime-Cross (CPC)</b>.</p>
<ul>
<li>Let <b>L</b> be the number of contiguous <b>^</b> to the left of <b>X</b>, in the same row as <b>X</b>.</li>
<li><b>R</b> be the number of contiguous <b>^</b> to the right of <b>X</b>, in the same row as <b>X</b>.</li>
<li><b>T</b> be the number of contiguous <b>^</b> above <b>X</b>, in the same column as <b>X</b>.</li>
<li><b>B</b> be the number of contiguous <b>^</b> below <b>X</b>, in the same column as <b>X</b>.</li>
</ul>
<p>A cell <b>X</b> is said to be a <b>CPC</b> if there exists a prime number <b>P</b> such that <b>P ≤ minimum of [L, R, T, B]</b>.</p>
<p>Note that, there can be many such primes, let <b>N</b> be the number of such primes. That <b>CPC</b> can accommodate <b>N</b> monsters.</p>
<p><b>Note:</b> While computing <b>L, R, T, B</b> for a cell <b>X</b>, you should not count the <b>^</b> of the cell <b>X</b>.</p>
<p>Given a map, you have to tell Kirito the number of cells where monsters exist.</p>
<p><b>Future</b></p>
<p>Have fun solving other tasks :-)</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <strong>T</strong> denoting the number of test cases. The description of <strong>T</strong> test cases follows. Each case starts with a line containing two space separated integers <strong>R, C</strong>, denoting the number of rows and columns in the map respectively. The next <strong>R</strong> lines contain <strong>C</strong> characters each, describing the map.</p>
<h3>Output</h3>
<p>For each test case, output a single line containing the number of monsters the map can accommodate.</p>
<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 100</li>
<li>1 ≤ <b>R</b> ≤ 500</li>
<li>1 ≤ <b>C</b> ≤ 500</li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
2
3 10
#^^^^^#^##
^^^^^^^^^^
^^^^^^^^^#
7 10
^^^^#^^^^#
^^^^^^^^#^
^^##^^#^^^
#^^^^^^^#^
^^#^^^^^^^
^^^^#^^^^^
^^^^^^^^^^

<b>Output:</b>
0
3
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/kaushik_iska">kaushik_iska</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/xcwgf666">xcwgf666</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>16-07-2013</td>
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