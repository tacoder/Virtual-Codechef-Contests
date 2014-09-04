<?php require("../../includes/header.php"); ?><h1>Search engine</h1><div class="content">

<p>
After Playing Game in Alkhwarizm, BKUL is now working as a software devlopper. Recently he has devlopped a small search engine which perform search for a string S in database. He has used following Algorithm for searching.<br /><br />
	Suppose there are N strings in database. It starts comparing string with each string in the database from the beginning. Two strings are compared letter by letter from start until a mismatch found or end of one of the string reaches.When algorithm find the string S in database, it terminates. Every comparison is counted as a single step.<br /><br />
	Your task is to write a program that calculates number of steps the algorithm uses to find each of the Q query strings.</p>
<h3>Input</h3>
<p>
Input will begin with an integer N, number of strings in data base. Each of the following N lines contain a single string from database. Strings are given in the order the algorithm compare them to a query string. All strings in database will be distinct.<br />
The following line contains an integer Q, the number of queries. Each of the following Q lines contain a single query string. All strings in the input will be strings of less than 30 lowercase letters of the English alphabet.</p>
<h3>Output</h3>
<p>
Print one integer per line for each query string, the number of steps algorithm uses while searching for the string in the same order as given in the input.</p>
<h3>Constraints</h3>
<p>
        1 &lt;= N &lt;= 30,000<br /><br />
	1 &lt;= Q &lt;= 30,000</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
5
avsvinaystp
bvksgptk
vkrjgr
robot
habbit
3
habbit
vkrjgr
bvkija

<b>Output:</b>
11
9
8

</pre><h3>Explanation</h3>
<p>Output for first query  is 11, which is result of 1 + 1 + 1 + 1 + 7, for corresponding strings in database.</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/saabir">saabir</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>28-09-2011</td>
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
            <td>C, C99 strict, CPP 4.3.2, CPP 4.8.1, CPP11, GO, NODEJS</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>