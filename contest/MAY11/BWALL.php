<?php require("../../includes/header.php"); ?><h1>The Great Wall of Byteland</h1><div class="content">

<p>In order to protect the southern border of Bytelandian Empire against intrusions by various nomadic groups, the Emperor of Byteland has decided to build a wall along the southern border. The best architect Johny is recruited for the task.
</p>
<p>In order to minimise the cost of raw material, Johny is restricted to use only following two kinds of building blocks:<br />X &nbsp; &nbsp;  #<br />
<br />XX<br />
<br />The height of the wall is fixed and is 2 units, but the length of the wall varies. As a part of his job Johny needs to find out the number of ways he can construct the wall using above two types of building blocks where the length of the wall is specified. Write a program to help Johny.</p>
<h3>Input Format:</h3>

<p>The first line contains the number of test cases T followed by T lines. Each of the next lines contains an integer N representing the length of the wall.</p>
<h3>Output Format:</h3>

<p>Print T lines one for each test case, containing an integer that represents the number of ways of constructing the wall, modulo 1000000007.</p>
<h3>Example:</h3>
<pre>
<b>Sample Input:</b>
3
7
2
13
<br />
<b>Sample Output:</b>
655
5
272767
<b>Constraints:</b>
1&lt;=T&lt;=1000
1&lt;=N&lt;=10^9
<b>Explanation of 2nd Test Case</b>
N=2
The wall can be constructed in following 5 ways:
##
##
<br />
X#
XX
<br />
#X
XX
<br />
XX
X#
<br />
XX
#X
</pre><p></p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/nssprogrammer">nssprogrammer</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/pieguy">pieguy</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>16-03-2011</td>
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
            <td>C, C99 strict, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, GO, JAVA, NODEJS, PAS fpc, PAS gpc</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>