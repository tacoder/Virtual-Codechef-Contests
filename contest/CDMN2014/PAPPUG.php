<?php require("../../includes/header.php"); ?><h1>Too Many Repetitions</h1><div class="content">
<p><b>Problem Description</b></p>
<p>Pappu G of the famous C Party recently faced an interview. But as expected of him, he had studied only few words like RTI, women empowerment, youth, open system etc. He used these words so often in the interview that the audience mocked at him after the interview. Pappu G got very upset with all these and decided to analyze his interview. Of course he knows nothing and has so asked you to write a program to calculate the frequency of each of his words.</p>
<p>Given a sentence <i>S</i>, and <i>Q</i> words, you need to find out the count of each of those words in the interview.</p>
<p><b>Input</b></p>
<p>The first line of the input consists of the number of cases (T). T test cases follows. Each test case begins with line with the sentence (S). The sentence consists of upper case and lower case English alphabets only. Next line indicates the number of queries (Q). Next Q lines have a word each whose count you need to find in the sentence.</p>
<p><b>Output</b></p>
<p>For each test case, output Q lines, one for each query which is the count of the word.</p>
<p><b>Constraints</b></p>
<pre>
T ≤ 50<br />
1 ≤|S| ≤10000<br />
Q ≤ 100<br />
1 ≤ |word| ≤10000<br />
</pre><p><b>Sample Cases</b></p>
<pre>
2
RTIWomenRTIYouthRTI
5
Country
RTI
Women
Youth
rti
PPP
1
PP
</pre><p><b>Output</b></p>
<pre>
0
3
1
1
0
2
</pre><p><b>Explanations</b></p>
<ul>
<li>In the first case, we have 3 occurrences of "RTI" and 1 each for "Women" and "Youth". Note that words are case sensitive. After all Pappu G is a sensitive person. So "rti" has 0 frequency.</li>
<li>In the second case, "PP" has 2 occurrence. Note that words may overlap.</li>
</ul>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/phantom11">phantom11</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>7-02-2014</td>
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
            <td>C, CPP 4.3.2, GO, JAVA</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>