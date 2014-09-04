<?php require("../../includes/header.php"); ?><h1>Travelling Actresses</h1><div class="content">
<p> </p>
<p>In real life, <b>Amy</b> and <b>Blanchett</b> are great friends. They want to celebrate the Blanchett's victory for winning Best Actress Oscars Award.</p>
<p>They love to travel by trains. So,they planned to visit Metro Land. It consists of <b>n</b> stations connected by <b>m</b> railway tracks. Between two stations there is a single two-way track. All stations are reachable from each other.</p>
<p>As Amy and Blanchett’s homeplaces are very far from each other , they reached the Disney Land directly at stations <b>i</b> and <b>j</b> respectively.But Amy forgot her phone at home, so they were unable to contact each other.</p>
<p>In the hope of meeting each other luckily, both of them followed a strategy.<br />
At each station <b>i</b>, Amy or Blanchett can decide to stay there with probability <b>pi</b> or can decide to move with probability <b>(1-pi)</b> by choosing one of the tracks going from station i with equal probability. </p>
<p>E.g. If total <b>l</b> tracks go from station <b>i</b>, then they can choose the track going to station <b>j</b> with probability <b>(1-pi)/l</b>.
</p>
<p>
Your task is  to help two friends in meeting each other by finding the probability of their meeting at each station<br />
<b>i</b>.
</p>

<h3>Input</h3>
<p>
The first line contains four integers: <b>n</b> representing the numbers of stations. <b>m</b> representing the number of tracks. <b>i , j</b> representing the starting stations of Amy and Blanchett respectively.</p>
<p>Next <b>m</b> lines contain pairs of numbers — the numbers of stations connected by a track. </p>
<p>Next <b>n</b> lines contain probabilities <b>pi</b> with the accuracy of up to two digits after the decimal point — the probability to stay at station <b>i</b>.</p>
<p> </p>
<h3>Output</h3>
<p>In the <b>n</b> lines print <b>n</b> numbers, the number on <b>ith</b> line should represent the probability that the friends meet at the <b>ith</b> station rounded upto <b>6</b> decimal places.</p>
<p> </p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>n</b> ≤ <b>20</b></li>
<li><b>n-1</b> ≤ <b>m</b> ≤ <b>(n*(n-1))/2</b></li>
<li><b>1</b> ≤ <b>i,j</b> ≤ <b>n</b><b>  (i and j can be equal.)</b></li>
<li><b>0.01</b> ≤ <b>pi</b> ≤ <b>0.99</b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre>
<b>Sample Input 1:</b>
3 3 1 1
1 2
2 3
3 1
0.50
0.50
0.50

<b>Sample Output 1:</b>
1.000000
0.000000
0.000000


<b>Sample Input 2:</b>
3 3 1 2
1 2
1 3
2 3
0.50
0.50
0.50

<b>Sample Output 2:</b>
0.357143 
0.357143 
0.285714
</pre><p> </p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/purvi2">purvi2</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>21-03-2014</td>
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
            <td>C, CPP 4.3.2, CPP 4.8.1, GO, JAVA</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>