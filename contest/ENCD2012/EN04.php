<?php require("../../includes/header.php"); ?><h1>Dancing Words</h1><div class="content">

<pre>
In the &ldquo;Dancing Words&rdquo; problem, we are concerned with words constructed using the lowercase letters
 of the English alphabet - that is, a,b,c,...,z. These words need not necessarily be meaningful, any sequence
 of letters forms a word. For example, abbcada is a word.

We say that we can "hop" from the word word1 to the word word2 if they are "sufficiently close". We define
 word2 to be sufficiently close to word1 if one of the following holds:

 - word2 is obtained from word1 by deleting one letter.

- word2 is obtained from word1 by replacing one of the letters in word1 by some letter that appears
 to its right in word1 and which is also to its right in alphabetical order.

For example, we can hop from abbca to abca by deleting the second (or third letter). 
We can hop from aabca to abbca by replacing the a in the second position by the letter b that appears
 to the right of the a in aabca and which is also to its right in alphabetical order.
 On the other hand we cannot hop from abbca to aabca since we would need to replace the b
 in the second position by a, but a is to the left of b in alphabetical order.

You will be given a collection of words W. Your task is to find the length of the longest sequence
 w1,w2,w3&hellip;&hellip; of distinct words from W such that we may hop from w1 to w2, w2 to w3 and so on.
 We call this the hopping number for this set.

For example, if
W = {abacd, bcdada, dd, abcd,bcdd, adcd, addd, aa, ccd, add, ad}, then
 the hopping number is 7 corresponding to the sequence
abacd, abcd, adcd, addd, add, ad, dd

<b>Input format</b>
The first line of the input contains one integer N indicating the number of words in the input.
 This is followed by N lines of input, lines 2, 3,..., N+1, each containing one word over the letters {a,b,..., z}.

<b>Output format</b>
The output should be a single integer, indicating the hopping number of the given set of words.

<b>Test Data:</b>
You may assume N &le; 100. You may assume that each word has at most 10 letters.

<b>Example:</b>
Here is the sample input and output corresponding to the example discussed above.

<b>Sample Input</b>
11
abacd
bcdada
dd
abcd
bcdd
adcd
addd
aa
ccd
add
ad

<b>Sample Output</b>
7
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/pc_chawla">pc_chawla</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>17-02-2012</td>
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
            <td>C, C99 strict, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, GO, JAVA, NODEJS</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>