<?php require("../../includes/header.php"); ?><h1>Make It Zero 2</h1><div class="content">
<p>Aleksandra is the most popular girl in the city. Each boy can only dream about dating her. Other girls want to be like her.</p>
<p>Aleksandra is going to find herself a boyfriend. Of course such a beauty needs someone special. That's why she is going to announce a quiz. Even you can try your chances at this. Apart from boys, the girl also loves math. That's why this quiz is going to be mathematical.</p>
<p>She has two matrixes with <b>N</b> rows and <b>M</b> columns each. Let <b>P<sub>i,j</sub></b> and <b>A<sub>i,j</sub></b> be the <b>j</b><sup>th</sup> element of the <b>i</b><sup>th</sup> row of the first and second matrixes respectively. She likes <b>0</b>, that's why she is going to get rid of all non zero numbers in the second matrix. In each turn she may choose five integers:</p>
<ul>
<li><b>1 ≤ x<sub>1</sub> ≤ x<sub>2</sub> ≤ N</b></li>
<li><b>1 ≤ y<sub>1</sub> ≤ y<sub>2</sub> ≤ M</b></li>
<li><b>0 ≤ k ≤ 10000</b></li>
</ul>
<p>and after this, for all pairs <b>(i,j)</b> such that:</p>
<ul>
<li><b>x<sub>1</sub> ≤ i ≤ x<sub>2</sub></b></li>
<li><b>y<sub>1</sub> ≤ j ≤ y<sub>2</sub></b></li>
</ul>
<p>she does the following:</p>
<ul>
<li><b>A<sub>i,j</sub> = (k + A<sub>i,j</sub>) modulo P<sub>i,j</sub></b></li>
</ul>
<p>It takes her a lot of turns to do this. That's why she gives this problem to all boys in the city and promises to go for a date with the one who will solve this task with the fewest number of moves.</p>
<p>It is your chance to walk with such a wonderful girl. Just use it!</p>
<h3>Input</h3>
<p>The first line contains two space-separated integers <b>N</b> and <b>M</b>, denoting the size of the matrix. Then the <b>i</b><sup>th</sup> line of the next <b>N</b> lines contains <b>M</b> space-separated integers <b>P<sub>i,1</sub></b>, <b>P<sub>i,2</sub></b>, ..., <b>P<sub>i,M</sub></b>. After matrix <b>P</b>, matrix <b>A</b> is given in the same format.</p>
<h3>Output</h3>
<p>In the first line, print the integer <b>Q (0 ≤ Q ≤ N * M)</b>, denoting the number of the moves for erasing all non zero numbers from the second matrix. In the <b>i</b><sup>th</sup> line of the next <b>Q</b> lines, print <b>5</b> space-separated integers <b>x<sub>1</sub></b>, <b>y<sub>1</sub></b>, <b>x<sub>2</sub></b>, <b>y<sub>2</sub></b>, <b>k</b>, denoting the information about submatrix chosen at the <b>i</b><sup>th</sup> move.</p>
<p><b>Note: </b>Your solution will be judged as <i>wrong answer</i> if <b>Q</b> is larger then <b>N*M</b>.</p>
<h3>Constraints for the official judge data</h3>
<ul>
<li><b>66 ≤ N, M ≤ 99</b></li>
<li><b>1 ≤ P<sub>i,j</sub> ≤ 10 </b></li>
<li><b>0 ≤ A<sub>i,j</sub> &lt; P<sub>i,j</sub> </b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
2 2
1 2
2 3
0 1
1 1

<b>Output:</b>
2
1 1 2 2 1
2 2 2 2 1

</pre>
<h3>Scoring</h3>
<p>For each test file, your score is calculated as <b>100 × Q / (N × M)</b>. Then the total your score is defined as the average of your score for the test files (see the next paragraph, for more details). The aim for this problem is to minimize the total your score.</p>
<p>We have <b>40</b> official test files. You must correctly solve all test files to receive <i>accepted</i>. During the contest, the scores of the last <b>30</b> test files are <b>0</b>, that is, the total your score is calculated by only  the first <b>10</b> tests. After the contest, all solutions will be rescored by the average of the scores of the all <b>40</b> test files, and it will be the final score.</p>
<h3>Test generation</h3>
<p>In the official test file, <b>N</b> and <b>M</b> are choosing uniformly and randomly from <b>[66, 99]</b>. Each <b>P<sub>i,j</sub></b> is chosen randomly from <b>1</b> to <b>10</b> inclusive. Then each <b>A<sub>i,j</sub></b> is chosen randomly from <b>[0, P<sub>i,j</sub> − 1]</b>.</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/ballon_ziq">ballon_ziq</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/laycurse">laycurse</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>9-02-2014</td>
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