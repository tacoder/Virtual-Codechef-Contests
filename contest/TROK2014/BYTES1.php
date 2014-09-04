<?php require("../../includes/header.php"); ?><h1>RADIX</h1><div class="content">
<h3>Problem description : </h3>

<p> Radix is one of the most popular events of Troika, it is an event conceptualized to test the Robotic Engineering skills such as designing, construction and operation of robots. Chief organizer of event categorized all the participant robots into 100 categories (i.e. category 1 to 100). Any two robots in same category will be assumed to be identical. Now, Robo-race has N robot participating. Each robot runs in its separate lane. <br /><br />
____________________<br /><br />
1___________________<br /><br />
2___________________<br /><br />
3___________________<br /><br />
2___________________<br /><br />
4___________________<br /><br />
You will be given Q queries. Each query has two arguments x,y. You have to tell how many type of robots are running between lane x and y (inclusive of both).<br />
 </p>
<h3>Input</h3>
<p>There are 2 integers N and Q in first line of input. Next line contains N integers representing the category of robot. Then next Q lines consist of x and y representing the query [x,y].
</p>
<h3>Output</h3>
<p>Output consists of Q lines, each line has an integer representing the answer of respective query.</p>
<h3>Constraints</h3>
<p>1&lt;=N&lt;=10000<br /><br />
1&lt;=Q&lt;=100000<br /><br />
1&lt;=x&lt;=y&lt;=N</p>
<h3>Example</h3>
<pre><b>Input:</b>
5 4
1 2 3 2 4
1 3
2 4
1 5
2 5<br />
<b>Output:</b>
<p>3
2
4
3
</p></pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/behalgitanshu">behalgitanshu</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>1-01-2014</td>
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
            <td>C, CPP 4.3.2, CPP 4.8.1, CPP11, GO, JAVA</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>