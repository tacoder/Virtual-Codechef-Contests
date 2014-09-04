<?php require("../../includes/header.php"); ?><h1>ForbiddenSum</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/JAN14/mandarin/FRBSUM.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/JAN14/russian/FRBSUM.pdf">Russian</a>.</h3>
<p>Mike likes to invent new functions. The latest one he has invented is called <i>ForbiddenSum</i>. Let's consider how it can be calculated:</p>
<p>You are given a set <b>S</b> of positive integers. The integers are not necessary distinct. <i>ForbiddenSum</i> of <b>S</b> equals to the minimal <b>non-negative</b> integer, that can't be returned by the algorithm described below: </p>
<p><ul type="square">
<li>Choose a <i>random</i> subset <b>S'</b> of <b>S</b>(it can be empty as well);
</li><li>Calculate the sum of all the numbers of <b>S'</b> and assign it to the variable <b>T</b>;
</li><li>Return the value of the variable <b>T</b>.
	</li></ul>
</p>
<p>
I.e. if <b>S</b> = {1, 1, 3, 7}, the algorithm can return 0(<b>S'</b> = {}), 1(<b>S'</b> = {1}), 2(<b>S'</b> = {1, 1}), 3(<b>S'</b> = {3}), 4(<b>S'</b> = {1, 3}), 5(<b>S'</b> = {1, 1, 3}), but it can't return 6. So, <i>ForbiddenSum</i> of <b>S</b> equals to 6.
</p>
<p>
Inventing of new function is not the only Mike's hobby. Also, he likes to collect rare and unusual arrays. He is going to share with you one of them.
</p>
<p>
Formally, Mike gives you one array <b>A</b>, consisting of <b>N</b> positive integers. After that, he asks you <b>M</b> questions, two integers <b>L<sub>i</sub></b> and <b>R<sub>i</sub></b> describe <b>i</b>'th question: What does <i>ForbiddenSum</i> of <b>S</b>={<b>A<sub>L<sub>i</sub></sub></b>, <b>A<sub>L<sub>i</sub>+1</sub></b>, ..., <b>A<sub>R<sub>i</sub>-1</sub></b>, <b>A<sub>R<sub>i</sub></sub></b>} equal to?
</p>
<h3>Input</h3>

<p>The first line contains the only integer <b>N</b>. The second line contains <b>N</b> integers - the array <b>A</b>. <b>A</b> is 1-indexed.</p>
<p>The third line contains the only integer <b>M</b>. The following <b>M</b> lines contain two integer numbers 1 ≤ <b>L<sub>i</sub></b> ≤ <b>R<sub>i</sub></b> ≤ <b>N</b> each.</p>
<p> </p>
<h3>Output</h3>
<p>Output should consists of <b>M</b> lines. The <b>i</b>'th line should contains the answer to the <b>i</b>'th question.</p>
<p> </p>
<h3>Constraints</h3>
<p>1 ≤ <b>N</b>, <b>M</b> ≤ 100,000</p>
<p>1 ≤ <b>A<sub>i</sub></b> ≤ 10<sup>9</sup></p>
<p>1 ≤ <b>A<sub>1</sub></b> + <b>A<sub>2</sub></b> + ... + <b>A<sub>N</sub></b> ≤ 10<sup>9</sup></p>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
5
1 2 4 9 10
5
1 1
1 2
1 3
1 4
1 5

<b>Output:</b>
2
4
8
8
8
</pre><p> </p>
<h3>Explanation</h3>
<p>In the example test there are <b>M</b>=5 questions. We won't describe all of them, only two ones.</p>
<p><b>The first question</b></p>
<p>In the first test case <b>S</b> equals to {1}. The answer is <b>2</b>, because we can recieve 1 in case the algorithm chooses <b>S'</b> = {1}. But there are no chances to receive 2.</p>
<p><b>The second question</b></p>
<p>In the first test case <b>S</b> equals to {1, 2}. The answer is <b>4</b>, because we can recieve 1 in case the algorithm chooses <b>S'</b> = {1}, 2 in case the algorithm chooses <b>S'</b> = {2} and 3 in case the algorithm chooses <b>S'</b> = {1, 2}. But there are no chances to receive 4.</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/kostya_by">kostya_by</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/white_king">white_king</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>18-10-2013</td>
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