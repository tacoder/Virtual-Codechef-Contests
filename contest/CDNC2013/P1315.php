<?php require("../../includes/header.php"); ?><h1>Count The String</h1><div class="content">

<p> </p>
<p>The alphabet of Zorpia is quite peculiar. It consists of only two letters, A and B and that too in upper-case only. A visitor to Zorpia is amazed by the diversity of words formed by the combination of A and B. He notices one more peculiar thing about the words. All the words were of even length and the number of A’s in the word is equal to the number of B’s. One of the natives told him that it is the number of transitions in the word that guides the pronunciation of the words. The words having same number of transitions are pronounced almost similarly.</p>
<p>
Let us define what transition means here. A transition occurs in a word whenever there is a change from A to B. Eg: consider the word ABAB. It has three transitions. First when going from index 1 to 2, second when going from 2 to 3 and third when going from 3 to 4.</p>
<p>
Given the length of the word and the number of transitions, the visitor needs to find out how many such words are possible from the alphabet of Zorpia and following the rules for word as described above.
</p>
<p> </p>
<h3>Input</h3>
<p>The input consists of several test cases(5000 atmost). Each test case consists of two integers n and k where n is the length of word and n(2&lt;= n &lt;=10000) is even. K is the number of transitions. The input is terminated by n=k=0.</p>
<h3>Output</h3>
<p>For every test case output on a line an integer which is the number of words possible modulo 1,000,000,007.</p>
<h3>Example</h3>
<pre><b>Input:</b>
6 2
6 3
0 0


<b>Output:</b>
4 
8

</pre><p> </p>
<h3>Explanation</h3>
<p>For the first case the 4 words are AABBBA, ABBBAA, BAAABB, BBAAAB .</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/shivendra14">shivendra14</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>27-02-2013</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>0.3 sec</td>
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