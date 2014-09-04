<?php require("../../includes/header.php"); ?><h1>Tourist Guide</h1><div class="content">

<p>Problem text...<br />
Mr. G. works as a tourist guide. His current assignment is to take<br />
some tourists from one city to another. Some two-way roads connect the cities. For<br />
each pair of neighboring cities there is a bus service that runs only between those<br />
two cities and uses the road that directly connects them. Each bus service has a limit<br />
on the maximum number of passengers it can carry. Mr. G. has a map showing the<br />
cities and the roads connecting them. He also has the information regarding each<br />
bus service. He understands that it may not always be possible for him to take all<br />
the tourists to the destination city in a single trip.<br />
But Mr. G. finds it difficult to find the best route himself so that he may be<br />
able to take all the tourists to the destination city in minimum number of trips. So,<br />
he seeks your help.</p>
<h3>Input</h3>
<p>Input description...<br />
The input will contain one or more test cases. The first line of each test<br />
case will contain two positive integers N (1<N&lt;=100) and R representing<br />
respectively the number of cities and the number of road segment. Then R lines will<br />
follow each containing three integers C1, C2 and P. C1 and C2 are the city numbers<br />
and P (P>1) is the limit on the maximum number of passengers to be carried by the<br />
bus between the two cities. City numbers are positive integers ranging from 1 to N.<br />
2 5<br />
1 4 7<br />
3 6<br />
30<br />
15<br />
60<br />
20<br />
30<br />
20<br />
10 35<br />
25<br />
40<br />
the (R+1)th line will contain three integers S, D and T representing respectively the<br />
starting city, the destination city and the number of tourists to be guided.<br />
The input will end with two zeroes for N and R.</n&lt;=100)></p>
<h3>Output</h3>
<p>Output description...<br />
For each test case in the input output the minimum number of trips<br />
required on a separate line.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
7 10
1 2 30
1 3 15
1 4 10
2 4 25
2 5 60
3 4 40
3 6 20
4 7 35
5 7 20
6 7 30
1 7 99
3 2
1 2 15
2 3 10
1 3 30
0 0

<b>Output:</b>
4
3
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/rushikesh30">rushikesh30</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>14-02-2010</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>10 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>