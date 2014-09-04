<?php require("../../includes/header.php"); ?><h1>Deleting numbers</h1><div class="content">
<p>Sereja has an array of <b>n</b> integers <b>a[1], a[2], ..., a[n]</b>. In one move Sereja can do the following operation</p>
<p>Assume integers <b>v</b> and <b>t</b>, Where <b>1 ≤ v, t ≤ n</b>, such that, all the elements of the array <b>a[v], a[v + t], a[v + t * 2], ... a[v + t * k]</b> Where <b>k ≥ 0</b> are equal.</p>
<p>To delete all elements <b>a[v], a[v + t], a[v + t * 2], ... a[v + t * k]</b> from the array. The remaining elements are written in <b>a</b> without any gaps.</p>
<p>Note that you can not decide the value of <b>k</b>. After you decide the integers <b>v</b> and <b>t</b>, <b>k</b> will be set to the largest value possible. That is, the largest <b>k</b> such that <b>v + t * k ≤ n</b>. Your selection of <b>v</b> and <b>t</b> must satisfy the conditions described above for this value of <b>k</b>.</p>
<p>Sereja wants to delete the entire array. Help him delete all the elements of the array in the fewest number of moves. Since this is a Challenge Problem, your objective is to minimize the number of moves it takes to delete the entire array.</p>
<h3>Input</h3>
<p>The first line contains an integer <b>n</b>, the size of the array. The second line contains integers <b>a[1], a[2], ..., a[n]</b>, the integers written in the array.</p>
<h3>Output</h3>
<p>For each test case print in the first line number <b>q</b>, the number of moves you will take. In next <b>q</b> lines print pairs of the integers <b>v[i], t[i] (1 ≤ i ≤ q)</b>, the values for <b>v</b> and <b>t</b> that you assume during the move <b>i</b>. Be careful with the output sequence and output format. This problem uses a <b>custom judge</b>. Non adherence to the format may lead to verdicts like internal error, run time error and wrong answer.</p>
<h3>Constraints</h3>
<ul>
<li><b>1 ≤ n ≤ 100000</b></li>
<li><b>1 ≤ a[i] ≤ 100000</b></li>
</ul>
<h3>Example</h3>
<pre>
<b>Input 1:</b>
3
1 1 1
<b>Output 1:</b>
1
1 1

<b>Input 2:</b>
4
1 2 1 2
<b>Output 2:</b>
4
4 4
3 3
2 2
1 1

<b>Input 3:</b>
5
1 2 3 4 1
<b>Output 3:</b>
4
1 4
3 1
2 1
1 1

</pre><h3>Explanation</h3>
<p>In the third case</p>
<ul>
<li>After the move 1 4, we remove 1st and 5th (1 + 4) number, and the array will become: 2 3 4.</li>
<li>After the move 3 1, 4 will be omitted and the array will become 2 3. Note how the 1-based indexes now refer to the positions in the array [2, 3, 4] and not the positions of 2, 3, 4 in the original array.</li>
<li>And after the following two commands 3 and 2 will be removed and the array will become empty.</li>
</ul>
<h3>Scoring</h3>
<p>If your program solves a test case, it receives the score of <b>100*q/n</b> for that test case. Solving a test case means that the given array should be emptied using the given operation. Otherwise the test case is considered, not solved and the verdict Wrong Answer is provided. The total score of the program is simply the sum of the scores for each test files, divided by the number of test files (this is what the generic master judge does). Each test file has a single test case. Since the number of test files are same for everyone, this is effectively equal to the sum of scores for all the test files. In case it isn't apparent yet, the objective of this problem is to minimize your total score.</p>
<h3>Test Generation</h3>
<p>The tests are not randomly generated. Special properties are forced upon the generated array, which may or may not be different for each test case.</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/sereja">sereja</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/white_king">white_king</a></td>
				</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>9-06-2013</td>
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