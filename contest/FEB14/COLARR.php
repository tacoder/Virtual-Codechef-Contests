<?php require("../../includes/header.php"); ?><h1>Colored Array</h1><div class="content">
<h3>Read problems statements in <a href="/download/translated/FEB14/mandarin/COLARR.pdf" target="_blank">Mandarin Chinese </a> and <a href="/download/translated/FEB14/russian/COLARR.pdf" target="_blank">Russian</a>.</h3>
<p>Chef had a hard time arguing with his friend, and after getting a great old kick Chef saw a colored array with <b>N</b> cells, numbered from <b>1</b> to <b>N</b>.</p>
<p>The kick was so strong that Chef suddenly understood the rules of the game.</p>
<ul>
<li>Each cell is painted with a color. Here the colors are numbered from <b>1</b> to <b>M</b>.</li>
<li>For any cell <b>i</b>, Chef can repaint it with any color <b>q</b>, and the cost of such operation is <b>C<sub>i,q</sub></b> points.</li>
<li>However Chef can do at most <b>K</b> repaintings (<b>0</b> repaintings is possible). </li>
<li>After performing all repaintings, each cell will have some color. For each cell <b>i</b>, if cell <b>i</b> has color <b>q</b> then Chef will receive <b>B<sub>i,q</sub></b> points.</li>
</ul>
<p>Now Chef is wondering how many points can he receive in total when he repaints optimally.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b>, denoting the number of test cases. The description of <b>T</b> test cases follows.</p>
<p>The first line of each test case contains three space-separated integers <b>N</b>, <b>M</b> and <b>K</b>, denoting the number of cells and the number of colors, the maximal possible number of repaintings respectively. The next line contains <b>N</b> space-separated integers <b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>, ..., <b>A<sub>N</sub></b>, denoting the initial colors of the cells. Then <b>N</b> lines follow. The <b>i</b><sup>th</sup> line of them contains <b>M</b> integers <b>B<sub>i</sub><sub>1</sub></b>, <b>B<sub>i</sub><sub>2</sub></b>, ..., <b>B<sub>i</sub><sub>M</sub></b>, where <b>B<sub>ij</sub></b> denotes how many points Chef will receive if the cell <b>i</b> will be painted with <b>j</b>-th color after all operations. Then <b>N</b> lines follow. The <b>i</b><sup>th</sup> line  of them contains <b>M</b> integers <b>C<sub>i</sub><sub>1</sub></b>, <b>C<sub>i</sub><sub>2</sub></b>, ..., <b>C<sub>i</sub><sub>M</sub></b>, where <b>C<sub>ij</sub></b> denotes how many points Chef will lose if he repaints the cell <b>i</b> with color <b>j</b>.</p>
<p><b>Note:</b> Be careful that the size of input files can be large.</p>
<h3>Output</h3>
<p>For each test case, output a single line containing the maximal possible points.</p>
<h3>Constraints</h3>
<ul>
<li><b>1 ≤ T ≤ 5</b></li>
<li><b>0 ≤ K ≤ 1000</b></li>
<li><b>1 ≤ N, M ≤ 1000</b></li>
<li><b>1 ≤ A<sub>i</sub> ≤ M</b></li>
<li><b>0 ≤ B<sub>i,j</sub> ≤ 1000</b></li>
<li><b>0 ≤ C<sub>i,j</sub> ≤ 1000</b></li>
<li>If <b>j = A<sub>i</sub></b>, then <b>C<sub>i,j</sub> = 0</b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
1
4 2 1
1 1 2 2
1 1
1 1
1 1
3 1
0 1
0 1
1 0
1 0

<b>Output:</b>
5
</pre>
<p><b>Explanation:</b></p>
<p>For this sample, we can repaint only once, since <b>K = 1</b>. We should repaint <b>4</b><sup>th</sup> cell with color <b>1</b>. We will pay <b>1</b> for this, and receive:</p>
<p><b>1</b> (<b>1</b><sup>st</sup> cell - <b>1</b><sup>st</sup> color) + <br /><br /> <b>1</b> (<b>2</b><sup>nd</sup> cell -<b>1</b><sup>st</sup> color) + <br /><br /> <b>1</b> (<b>3</b><sup>rd</sup> cell - <b>2</b><sup>nd</sup> color) + <br /><br /> <b>3</b> (<b>4</b><sup>th</sup> cell - <b>1</b><sup>st</sup> color)  = <b>6</b>.</p>
<p>Hence we get <b>6 − 1 = 5</b> points in total, and it is the optimal answer.</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/berezin">berezin</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/gerald">gerald</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>7-01-2014</td>
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