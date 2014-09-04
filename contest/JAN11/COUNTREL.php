<?php require("../../includes/header.php"); ?><h1>Count Relations</h1><div class="content">

<p>Let A be a set of the first <b>N</b> positive integers :A={1,2,3,4.........N}<br />
<br />
Let B be the set containing all the subsets of A.</p>
<p>Professor Eric is a mathematician who defined two kind of relations R1 and R2 on set B.<br />
<br />
The relations are defined as follows:</p>
<p>R1={ (x,y) : x and y belong to B <b>and</b> x is not a subset of y <b>and</b> y is not a subset of x <b>and</b> the intersection of x and y is equal to empty set }</p>
<p>R2={ (x,y) : x and y belong to B <b>and</b> x is not a subset of y <b>and</b> y is not a subset of x <b>and</b> the intersection of x and y is not equal to empty set }</p>
<p>Now  given the number N,Professor Eric wants to know how many relations of kind R1 and R2 exists.Help him. </p>
<p> <b>NOTE :</b> (x,y) is the same as (y,x) ,i.e the pairs are <b>unordered</b>.</p>
<h3>Input format:</h3>

<p>The first line contains the number of test cases T.Each of the test case is denoted by a single integer N.</p>
<h3>Output format:</h3>

<p>Output T lines, one for each test case,containing  two integers denoting the number of relations of kind R1 and R2 respectively, modulo 100000007.</p>
<h3>Example</h3>
<pre>
<b>Sample Input:</b>
3
1
2
3
<b>Sample Output:</b>
0 0
1 0
6 3
<b>Constraints:</b>
1 &lt;= T &lt;= 1000
1 &lt;= N &lt;= 10^18
<b>Explanation:</b>
Let A={1,2}
Then B={Phi,{1},{2},{1,2}}
Phi=Empty Set
So R1=Either {({1},{2})} or {({2},{1})}
and R2=No relation exists
So,there is 1 relation of kind R1 and 0 relation of kind R2.
</pre><p></p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/nssprogrammer">nssprogrammer</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/subra">subra</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>4-12-2010</td>
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
            <td>C, C99 strict, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, GO, JAVA, NODEJS, PAS fpc, PAS gpc</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>