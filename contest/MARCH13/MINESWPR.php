<?php require("../../includes/header.php"); ?><h1>Minesweeper</h1><div class="content">

<p>Note: This is an interactive problem.  Interactive problems differ from classic problems in that your solution will send and receive data from a special judge program instead of from static files.  Pay special attention to the notice on output buffering described in the "Input + Output" section below.</p>
<p>An <b>N × N</b> field contains many mines.  Each mine occupies some cell of the field. Each cell could contain at most one mine. There are <b>M</b> mines in all at the field. You need to neutralize all of the mines so it will be safe to pass through.  The mines are neutralized with dynamite.  A single piece of dynamite can be used to neutralize a single cell. You have only <b>K</b> pieces of dynamite. But don't worry, it is guaranteed that <b>K ≥ M</b>.</p>
<p>You may perform two operations:</p>
<ul>
<li><b>N</b>eutralize - neutralize the mine in the specified cell, if one exists.  Otherwise has no effect.  This operation may be performed at most <b>K</b> times.</li>
<li><b>S</b>urvey - check a cell for a mine, and if it doesn't have a mine count the number of cells adjacent to it containing mines.  Previously neutralized mines are not counted.  Each cell is adjacent to up to 8 other cells (2 horizontally, 2 vertically, and 4 diagonally).  This operation may be performed at most <b>N</b><sup>2</sup> times. But you could survey the same cell twice if necessary and also it is allowed to survey the cell after neutralize operation was applied to it.</li>
</ul>
<p> </p>
<p>Surveying is very dangerous, so you need to try to minimize the number of survey operations you perform.  Submissions that use fewer survey operations will score more points.</p>
<h3>Input + Output</h3>
<p>Input begins with the line containing 3 space separated integers <b>N</b>, <b>M</b>, and <b>K</b>, the size of the field, the number of mines, and the number of pieces of dynamite, respectively. The locations of mines are predetermined but currently unknown to you.</p>
<p>To perform a neutralize operation, print a line containing "N x y" (without quotes), where <b>x</b> and <b>y</b> are the coordinates of the cell you wish to neutralize (0 ≤ <b>x</b>, <b>y</b> &lt; <b>N</b>).</p>
<p>To perform a survey operation, print "S x y" (without quotes), where <b>x</b> and <b>y</b> are the coordinates of the cell you wish to check (0 ≤ <b>x</b>, <b>y</b> &lt; <b>N</b>).  Then read a line containing a single character.  This character will be 'M' if the cell contains a mine, otherwise it will be an integer between 0 and 8, indicating the number of cells adjacent to the specified cell that contain mines.</p>
<p>When you are finished, print "Done" (without quotes).</p>
<p>Note that you will receive Wrong Answer verdict if one of the following happens:</p>
<ul>
<li>You will perform more than <b>N<sup>2<sup></sup></sup></b> survey operations.</li>
<li>You will perform more than <b>K</b> neutralize operations.</li>
<li>You will output operation in wrong format.<br /> In particular, <b>x</b> and <b>y</b> should be between <b>0</b> and <b>N − 1</b>, inclusive.</li>
<li>You will output "Done" but not all mines are neutralized.</li>
</ul>
<p> </p>
<p><i>Attention: the program should clear the output buffer after printing each line. It can be done using fflush(stdout) command or by setting the proper type of buffering at the beginning of the execution - setlinebuf(stdout).  Failure to flush the output buffer will result in Time Limit Exceeded verdict.</i><br /> For example, at C/C++ you could use the following routines:</p>
<pre><code>char Survey(int x, int y) {
    printf("S %d %d\n", x, y);
    fflush(stdout);
    char res;
    scanf(" %c", &amp;res);
    return res;
}

void Neutralize(int x, int y) {
    printf("N %d %d\n", x, y);
    fflush(stdout); /* but it is not necessary here */
}
</code></pre><h3>Scoring</h3>
<p>Suppose you successfully neutralized all mines using <b>S</b> survey operations.<br /> Then your score is <b>10 * (S + 1) / N<sup>2</sup></b>. Lower scores will earn more points.</p>
<h3>Sample Input + Output</h3>
<pre><code>In:  4 2 3
Out: S 0 0
In:  0
Out: S 2 3
In:  2
Out: S 1 2
In:  M
Out: N 1 2
Out: S 2 3
In:  1
Out: S 3 2
In:  1
Out: N 2 2
Out: N 3 3
Out: Done
</code></pre><h3>Explanation</h3>
<p>The mines are located at (1, 2) and (3, 3).  The operations proceed as follows:</p>
<ul>
<li>Survey (0, 0).  This cell does not contain a mine, nor do any of its 3 neighbors ((0, 1), (1, 0) and (1, 1)), so the result is "0".</li>
<li>Survey (2, 3).  This cell does not contain a mine, but 2 of its 5 neighbors contain mines, so the result is "2".</li>
<li>Survey (1, 2).  This cell contains a mine.  The survey result is "M".</li>
<li>Neutralize (1, 2).  Destroy the mine in the cell (1, 2).</li>
<li>Survey (2, 3).  This cell was surveyed before, however the mine in (1, 2) has now been neutralized, so only one mine remains and the result is "1".</li>
<li>Survey (3, 2).  This cell is adjacent to the remaining mine.</li>
<li>Neutralize (2, 2).  This cell does not contain a mine, but we have a spare piece of dynamite so it's okay to neutralize this cell unnecessarily.</li>
<li>Neutralize (3, 3).  Destroy the last mine in the cell (3, 3).</li>
<li>Done. All of the mines have now been neutralized.</li>
</ul>
<p> </p>
<p>Note that the above sequence of operations is also consistent with the mines having been located at (1, 2) and (2, 2).  This sample performs 5 survey operations, and therefore would score <b>10 * (5 + 1) / 4<sup>2</sup> = 3.75</b>.</p>
<h3>Test Case Generation</h3>
<p><b>N</b> is chosen randomly and uniformly between 30 and 50, inclusive.  A real number <b>P</b> is chosen randomly and uniformly between 0.1 and 0.3, inclusive.  Each cell is independently chosen to contain a mine with probability <b>P</b>.  Then <b>M</b> is set to be the number of mines on the generated field.  With 50% probability, <b>K</b> is chosen to be equal to <b>M</b>.  Otherwise, <b>K</b> is chosen randomly and uniformly between <b>M</b> and <b>N</b><sup>2</sup>/2, inclusive.</p>
<p><i>Note: The locations of the mines are not guaranteed to be the same across multiple submissions, however <b>N</b>, <b>M</b>, and <b>K</b> will be the same for each official input file across all submissions.</i></p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/pieguy">pieguy</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/anton_lunyov">anton_lunyov</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>13-02-2013</td>
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