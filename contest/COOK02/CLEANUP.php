<?php require("../../includes/header.php"); ?><h1>Cleaning Up</h1><div class="content">

<p>
After a long and successful day of preparing food for the banquet, it is time to clean up. There is a list of n jobs to do before the kitchen can be closed for the night. These jobs are indexed from 1 to n.</p>
<p>
Most of the cooks have already left and only the Chef and his assistant are left to clean up. Thankfully, some of the cooks took care of some of the jobs before they left so only a subset of the n jobs remain. The Chef and his assistant divide up the remaining jobs in the following manner. The Chef takes the unfinished job with least index, the assistant takes the unfinished job with the second least index, the Chef takes the unfinished job with the third least index, etc. That is, if the unfinished jobs were listed in increasing order of their index then the Chef would take every other one starting with the first job in the list and the assistant would take every other one starting with the second job on in the list.</p>
<p>
The cooks logged which jobs they finished before they left. Unfortunately, these jobs were not recorded in any particular order. Given an unsorted list<br />
 of finished jobs, you are to determine which jobs the Chef must complete and which jobs his assitant must complete before closing the kitchen for the<br />
evening.</p>
<h3>Input</h3>

<p>
The first line contains a single integer T ≤ 50 indicating the number of test cases to follow. Each test case consists of two lines. The first line contains two numbers n,m satisfying 0 ≤ m ≤ n ≤ 1000. Here, n is the total number of jobs that must be completed before closing and m is the number of jobs that have already been completed. The second line contains a list of m distinct integers between 1 and n. These are the indices of the jobs that have already been completed. Consecutive integers are separated by a single space.</p>
<h3>Output</h3>

<p>
The output for each test case consists of two lines. The first line is a list of the indices of the jobs assigned to the Chef. The second line is a list of the indices of the jobs assigned to his assistant. Both lists must appear in increasing order of indices and consecutive integers should be separated by a single space. If either the Chef or the assistant is not assigned any jobs, then their corresponding line should be blank.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
3
6 3
2 4 1
3 2
3 2
8 2
3 8

<b>Output:</b>
3 6
5
1

1 4 6
2 5 7
</pre>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/friggstad">friggstad</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/pieguy">pieguy</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>9-08-2010</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>5 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>