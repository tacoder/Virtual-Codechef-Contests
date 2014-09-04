<?php require("../../includes/header.php"); ?><h1>Divide the Tangerine</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/APRIL14/mandarin/TANGDIV.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/APRIL14/russian/TANGDIV.pdf">Russian</a>.</h3>

<p>Once Chef decided to divide the <a href="http://en.wikipedia.org/wiki/Tangerine">tangerine</a> into several parts. At first, he numbered tangerine's segments from <b>1</b> to <b>n</b> in the clockwise order starting from some segment. Then he intended to divide the fruit into several parts. In order to do it he planned to separate the neighbouring segments in <b>k</b> places, so that he could get <b>k</b> parts: the <b>1<sup>st</sup></b> - from segment <b>l<sub>1</sub></b> to segment <b>r<sub>1</sub></b> (inclusive), the <b>2<sup>nd</sup></b> - from <b>l<sub>2</sub></b> to <b>r<sub>2</sub></b>, ..., the <b>k<sup>th</sup></b> - from <b>l<sub>k</sub></b> to <b>r<sub>k</sub></b> (in all cases in the clockwise order). Suddenly, when Chef was absent, one naughty boy came and divided the tangerine into <b>p</b> parts (also by separating the neighbouring segments one from another): the <b>1<sup>st</sup></b> - from segment <b>a<sub>1</sub></b> to segment <b>b<sub>1</sub></b>, the <b>2<sup>nd</sup></b> - from <b>a<sub>2</sub></b> to <b>b<sub>2</sub></b>, ..., the <b>p<sup>th</sup></b> - from <b>a<sub>p</sub></b> to <b>b<sub>p</sub></b> (in all cases in the clockwise order). Chef became very angry about it! But maybe little boy haven't done anything wrong, maybe everything is OK? Please, help Chef to determine whether he is able to obtain the parts he wanted to have (in order to do it he can divide <b>p</b> current parts, but, of course, he can't join several parts into one).</p>
<p> Please, note that parts are not cyclic. That means that even if the tangerine division consists of only one part, but that part include more than one segment, there are two segments which were neighbouring in the initial tangerine but are not neighbouring in the division. See the explanation of <b>example case 2</b> to ensure you understood that clarification.</p>
<h3>Input</h3>

<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.<br />
The first line of each test case contains three space separated integers <b>n</b>, <b>k</b>, <b>p</b>, denoting the number of tangerine's segments and number of parts in each of the two divisions. The next <b>k</b> lines contain pairs of space-separated integers <b>l<sub>i</sub></b> and <b>r<sub>i</sub></b>. The next <b>p</b> lines contain pairs of space-separated integers <b>a<sub>i</sub></b> and <b>b<sub>i</sub></b>.</p>
<p>It is guaranteed that each tangerine's segment is contained in exactly one of the first <b>k</b> parts and in exactly one of the next <b>p</b> parts.</p>
<h3>Output</h3>
<p>For each test case, output a single line containing either "Yes" or "No" (without the quotes), denoting whether Chef is able to obtain the parts he wanted to have.</p>
<p> </p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>100</b></li>
<li><b>1</b> ≤ <b>n</b> ≤ <b>5 * 10<sup>7</sup></b></li>
<li><b>1</b> ≤ <b>k</b> ≤ <b>min(500, n)</b></li>
<li><b>1</b> ≤ <b>p</b> ≤ <b>min(500, n)</b></li>
<li><b>1</b> ≤ <b>l<sub>i</sub></b>, <b>r<sub>i</sub></b>, <b>a<sub>i</sub></b>, <b>b<sub>i</sub></b> ≤ <b>n</b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
2
10 3 2
1 4
5 5
6 10
1 5
6 10
10 3 1
2 5
10 1
6 9
1 10

<b>Output:</b>
Yes
No
</pre><p> </p>
<h3>Explanation</h3>
<p><b>Example case 1:</b> To achieve his goal Chef should divide the first part (1-5) in two by separating segments 4 and 5 one from another.</p>
<p><b>Example case 2:</b> The boy didn't left the tangerine as it was (though you may thought that way), he separated segments 1 and 10 one from another. But segments 1 and 10 are in one part in Chef's division, so he is unable to achieve his goal.</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/malinovsky239">malinovsky239</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/shiplu">shiplu</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>28-02-2014</td>
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