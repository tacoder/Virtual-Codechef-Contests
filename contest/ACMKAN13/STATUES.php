<?php require("../../includes/header.php"); ?><h1>Statues</h1><div class="content">
<p>The Princess of the Indian Royal Rajput clan loves her Royal Palace. There are <b>N</b> rooms in the palace. Every room has one or more statues. It is not necessary that every room has the same number of statues.</p>
<p>The Princess believes in total equality. It makes her sad to see some rooms with more statues than other rooms. Hence, she has decided to make the number of statues equal in all the rooms. Fortunately, the total number of statues in the palace, across all the rooms, is a multiple of <b>N</b>.</p>
<p>Your job is to figure out the minimum number of moves needed in order to equalize the number of statues in all the rooms. In one move, you may select a statue and move it to any other room. All the statues are indistinguishable.</p>
<h3>Input</h3>
<p>The input consists of multiple test cases. Each test case is described on two lines.</p>
<p>The first line contains a single positive integer <b>N</b>, the number of rooms.</p>
<p>The second line contains <b>N</b> positive integers <b>{ A<sub>1</sub>, A<sub>2</sub>, ..., A<sub>N</sub> }</b> separated by single spaces, describing the number of statues in each of the <b>N</b> rooms respectively.</p>
<p>The end of input is signified by a special test case with <b>N = 0</b>. This will be the last test case in the input, and should not be processed.</p>
<h3>Constraints</h3>
<pre>
<b>There are at most 50 test cases in a test file.</b>
<b>1 ≤ N ≤ 50</b>
<b>1 ≤ A<sub>i</sub> ≤ 100</b>
<b>Sum of all A<sub>i</sub>'s is divisible by N</b>

</pre><h3>Output</h3>
<p>For each test case, print two lines in the output. The first of such lines is the <b>test case number, T</b> in the form of "<b>Set #T</b>", without the quotes (see sample output for clarity). On the second line, print "<b>The minimum number of moves is M.</b>", without the quotes. Here, <b>M</b> is the minimum number of moves you must make to equalize the number of statues in all the rooms. Output a blank line after each test case.</p>
<p>Be careful about the case and punctuation in the above strings. Not adhering to the output format strictly will lead to the Wrong Answer verdict.</p>
<h3>Sample Input</h3>
<pre>
6
5 2 4 1 7 5
3
2 3 4
0

</pre><h3>Sample Output</h3>
<pre>
Set #1
The minimum number of moves is 5.

Set #2
The minimum number of moves is 1.

</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/admin">admin</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/gamabunta">gamabunta</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>13-10-2013</td>
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
            <td>C, CPP 4.8.1, GO, JAVA</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>