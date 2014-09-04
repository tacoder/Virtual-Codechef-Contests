<?php require("../../includes/header.php"); ?><h1>Good Poem</h1><div class="content">
<h2>Good Poem</h2>
<p>Thakur finally decided to tell a poem to his girlfriend on phone to impress her. But being a geeky coder, he thinks a good poem is one that only has a number containing digits 1 or 2 only. So only numbers like 112, 12222  forms a good poem and not 1134, 8222 etc.</p>
<p>Now Thakur's girlfriend is also very meticulous about the poem. She has given some demands on the number Thakur is going to recite in the poem. Demands are in form of number of occurrences of substring "1","2","12","21" in the poem as d1,d2,d3,d4 respectively. For example - if poem is "22221111"  d1 = 4 , d2 = 4, d3 = 0 ,d4 = 1.</p>
<p>Given the demands, help Thakur finding SMALLEST such number that he can recite in the poem.</p>
<h3>INPUT:</h3>
<p>The first line of the input contains number t – the amount of tests. Then t test descriptions follow. The first line of each test contains four integers d1,d2,d3,d4 - the four demands on the poem.</p>
<h3>CONTRAINTS :  </h3>
<ul>
<li> <b>1</b> &lt;= t &lt;= 10 </li>
<li>1 &lt;= d1,d2,d3,d4 &lt;= 10^6 </li>
</ul>
<h3>OUTPUT : </h3>
<p>For each test case, the SMALLEST number that fullfill all the demands. If no such number exists, print "SORRY THAKUR!" (without quotes).</p>
<h3>SAMPLE TESTS:</h3>
<h5>INPUT:</h5>
<pre>
	3
	2 2 1 1
	4 7 3 1
	2 3 1 2
	</pre><h5>OUTPUT:</h5>
<pre>
	1221
	SORRY THAKUR!
	21221
	</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/arvchamp">arvchamp</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>19-03-2014</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>4 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>C, CPP 4.3.2, CPP 4.8.1, GO, JAVA</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>