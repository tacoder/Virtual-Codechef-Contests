<?php require("../../includes/header.php"); ?><h1>Sereja and Sorting</h1><div class="content">
<p>
Sereja has an array, which consists of <b>N</b> integers. Let the integers be denoted by <b>a<sub>1</sub>, a<sub>2</sub>, ... a<sub>N</sub></b>. Sereja has just started learning about sorting. Sereja wrote a program, which takes input of an index <b>idx</b> and then sorts the elements of Sereja's array which satisfy <b>{ a<sub>i</sub> : idx ≤ i &lt; min(N + 1, idx + K) }</b>.</p>
<p>
Now, Sereja wants to solve the more interesting problem of sorting the original array. But, Sereja is not very keen on writing more programs. So he asks you to write a program that provides input to his program so that his array is sorted. He shall be more pleased if you sort his array in as few operations (where an operation is one invocation of Sereja's program) as possible.</p>
<h3>Input</h3>
<p>
The first line of the input contains an integer <b>T</b>, the number of test cases. The description of <b>T</b> test cases follows. The first line of each test case contains integers <b>N</b> and <b>K</b>. <b>N</b> is then length of Sereja's array for that test case. <b>K</b> is the size of the block that is sorted whenever Sereja's program is invoked with an index. The second line of each test case contains integers <b>a<sub>1</sub>, a<sub>2</sub>, ... a<sub>n</sub></b>.</p>
<h3>Output</h3>
<p>
This is a challenge problem, hence the output specification is very strict. Make sure you produce output exactly as described here, otherwise you will get a verdict of Wrong Answer..</p>
<p>
For each test case, the first line contains an integer <b>Q</b>, the number of times you want to invoke Sereja's program for that test case. <b>Q</b> must be an integer between 0 and (n*n/k + 1000), inclusive. On the next line, print exactly <b>Q</b> space separated integers <b>q<sub>1</sub> q<sub>2</sub> ... q<sub>N</sub></b>. Make sure that each <b>q<sub>i</sub></b> falls exactly in the range <b>[1,N]</b>. The order in which the integers appear, is the order in which they will be used to step by step invoke Sereja's program and sort the sub-arrays. Refer to the next section on <b>Scoring</b> to know how your output is scored. It is important to note that for each test file, you <b>have</b> to successfully sort at least one of the <b>Sereja's Arrays</b> (i.e. for at least one test case, the given array, should be sorted in the end of all the calls). Failure to do so will result in a Wrong Answer verdict.</p>
<h3>Scoring</h3>
<p>
If your program solves a test case, it receives the score of <b>Q * K</b> for that test case. <b>Solving</b> a test case means that the given array should have been successfully sorted in the end. Otherwise the test case is considered, not solved. In this case, your program receives a score of 10,000,000 for that test case. The total score for a test file is the sum of scores of each test case in the file. The total score of the program is simply the sum of the scores for each test files, divided by the number of test files (this is what the generic master judge does). Since the number of test files are same for everyone, this is effectively equal to the sum of scores for all the test files. In case it isn't apparent yet, the objective of this problem is to <b>minimize your total score</b>.</p>
<h3>Constraints</h3>
<p>
<b>1 ≤ T ≤ 10</b><br />
<b>1 ≤ N ≤ 1000</b><br />
<b>2 ≤ K ≤ N</b><br />
<b>1 ≤ a<sub>i</sub> ≤ 1000000000</b><br />
<b>You may assume there is always some way to sort the array within (n*n/k + 1000) calls</b></p>
<h3>Sample</h3>
<pre>
<b>Input</b>
3
1 2
1
5 3
10 1 2 3 4
10 3
10 1 2 3 4 5 6 7 9 10

<b>Output:</b>
0
3
1 2 3
5
1 3 5 7 8

</pre><p>
The above sample will receive a score of <b>0*1 + 3*3 + 5*3 = 24</b>.</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/sereja">sereja</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/gamabunta">gamabunta</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>8-06-2013</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>